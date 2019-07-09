<?php

namespace frontend\models\catalog;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\web\IdentityInterface;
use yii\data\Pagination;
use yii\data\Sort;
use yii\helpers\VarDumper;
use yii\data\ActiveDataProvider;

/*КЛАСС СБОРКИ ДАННЫХ*/
/*
----Структура модели----

1) Главный вход. Определение параметров.
2) По состоянию параметров подчинение других классов в рамках одного файла.

*/

class catalog{

	/**
	 * @param $param
	 */
	public function getCatalog($param){

		$product = new product();

		if(empty($param['post']) && empty($param['get'])){

			$param = false;

		}else if(!empty($param['post']) && empty($param['get'])){

			$param = $param['post'];

		}else if(!empty($param['get']) && empty($param['post'])){

			$param = $param['get'];

		}

		$data = [
			'model' => $product,
			'items' => $product->getItem($param)
		];

		//var_dump($data);

		return $data;

	}

}

//КАТЕГОРИЯ ТОВАРОВ
class category extends  ActiveRecord{

	public static function tableName(){

		return '{{cat_category}}';

	}

	public function getOneCategory($id){

		return static::find()->where(['id' => $id])->asArray()->one();

	}

	public function getAllCategory(){

		return static ::find()->asArray()->all();

	}

}

class product extends ActiveRecord{
    
    public $price_ionslider;
    
    public $price_sort;
    
    public $category;

	public static function tableName(){

		return '{{cat_product}}';

	}

	public function getItem($param){
        
        $category = new category();
        
		if($param == false){
            
            $data = [
                'AllCategory' => $category->getAllCategory(),
                'adp' => $this->getDefaultADP(),
                'filter' =>'23000;65000'
            ];

		}else{
		
            $data = [
                'AllCategory' => $category->getAllCategory(),
                'adp' => $this->getADP($param['product']['price_ionslider'], $param['product']['price_sort'], $param['product']['category']),
                'filter' => $param['product']['price_ionslider']
            ];

		}
  
		return $data;

	}

	public function getCategory($param){

		$category = new category();

		return $category->getCategorys();

	}

	private function  getDefaultADP(){

	    $query = static::find();
        //var_dump($query->all());
        $dataProvider = new ActiveDataProvider([
            'query' => $query,	//$query = static::find()->all(); НЕДОПУСТИМА!
            'Pagination' =>[
                'pageSize' => 12
            ],
            'sort' => [
                'defaultOrder' => [
                    'price' => SORT_ASC
                ],
            ],

        ]);

        return $dataProvider;

    }

    private function getADP($price, $sort, $category){
    
        list($from, $to) = explode(";", $price);
    
        if(empty($category)){
        
            $query = static::find()->filterWhere(['>','price', $from])->andFilterWhere(['<', 'price', $to]);
        
        
        }else if(!empty($category)){
        
            $query = static::find()->filterWhere(['>','price', $from])->andFilterWhere(['<', 'price', $to])->andFilterWhere(['id_category' => $category]);
        
        }
        
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'Pagination' =>[
                'pageSize' => 12
            ],
            'sort' => [
                'defaultOrder' => [
                    'price' => SORT_ASC
                ],
                'attributes' => [
                    'price' => [
                        $sort => ['price' => SORT_DESC]
                    ]
                ]
            ],

        ]);

        return $dataProvider;

    }

}