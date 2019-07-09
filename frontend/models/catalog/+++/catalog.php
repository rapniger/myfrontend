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
class catalog extends ActiveRecord{
	//КАТАЛОГ ТОВАРОВ
	public function getCatalog($param){
		
		$products = new products();
		
		$controller = [
			'model' => $products,
			'items' => $products->getProducts($param),
		];
		
		return $controller;
		
	}
	//ПРОСМОТР ТОВАРА
	public function getItem($param){
		
		$product = new product();
		
		$comment = new comment();
		
		$controller = [
			'model' => $product,
			'item' => $product->getProduct($param),
			'randomitem' => $product->getRandomItems(),
			'comment' => $comment->getComment($param)
		];
		
		return $controller;
		
	}

}

//КАТЕГОРИЯ ТОВАРОВ
class category extends ActiveRecord{
	
	public static function tableName(){
		
		return '{{cat_category}}';
	
	}
	
	public function getCategory($param){
		
		return static::find()->where(['id' => $param['get']['category']])->asArray()->one();
		
	}
	
	public function getCategorys(){
		
		return static::find()->asArray()->all();
		
	}

}


//КЛАСС ДЛЯ КАТАЛОГА
class products extends ActiveRecord{
	
	public $price_sort;
	
	public static function tableName(){
		
		return '{{cat_product}}';
	
	}
	
	public function getADP($param){
		
		$query = static::find();
		
		$dataProvider = new ActiveDataProvider([
			'query' => $query,	//$query = static::find()->all(); НЕДОПУСТИМА! 
			'Pagination' =>[
				'pageSize' => 12
			],
			'sort' => [
				'defaultOrder' => [
					'price' => SORT_ASC
				],
				'attributes' => [
					'price' => [
						$param['sort'] => ['price' => SORT_DESC]
					]
				]
			],
			
		]);
		
		if(!($this->load($param['get']))){
			
			return $dataProvider;
			
		}
		
		list($data['from'], $data['to']) = explode(";", $param['get']['products']['price']);
		
		$query->filterWhere(['>','price', $data['from']])->andFilterWhere(['<', 'price', $data['to']])->andFilterWhere(['id_category' => $param['get']['category']]);
		
		return $dataProvider;
		
	}
	
	public function getProducts($param){
		
		if(empty($param['post']) && empty($param['get'])){
			//если параметры пустые
			//зададим по умолчанию параметры
			$default['get']['product']['price'] = "23000;65000";
			
			$defalut['sort'] = 'desc';
			
			$data = $this->getADP($defalut);
			
			
		}else if(!empty($param['post']) && empty($param['get'])){
			
			
			
		}else if(empty($param['post']) && !empty($param['get'])){
			
			$default['get']['product']['price'] = $param['get']['product']['price'];
			
			$defalut['sort'] = $param['get']['product']['sort'];
			
			$data = $this->getADP($defalut);
			
		}else if(!empty($param['post']) && !empty($param['get'])){
			
			
		}
		
		return $data;
		
		
	}
	
}

//КЛАСС ДЛЯ ПРОСМОТРА ПРОДУКТА
class product extends ActiveRecord{
	
	public static function tableName(){
		
		return '{{cat_product}}';
	
	}
	//МОДУЛЬ ПРОСМОТРА ПРОДУКТА
	public function getProduct($param){
		
		if(empty($param['get'])){
			//ЕСЛИ ОТСУТСТВУЮТ ПАРАМЕТРЫ GET, ТО ВОВЗРАЩАЕМ id_product  = 1.
			return static::find()->where(['id_product' => '1'])->asArray()->one();
			
		}else{
			
			if(empty($param['get']['product'])){
				//ЕСЛИ ЛЕВЫЕ ПАРАМЕТРЫ GET, ТО ВОВВЗРАШАЕМ id_product = 1
				return static::find()->where(['id_product' => '1'])->asArray()->one();
				
			}else if(!empty($param['get']['product'])){
				//ЕСЛИ УСТАНОВЛЕН ИСТИННЫЙ GET - ВОЗВРАЩАЕМ ТО ЧТО УКАЗАНЫ.
				return static::find()->where(['=', 'id', $param['get']['product']])->asArray()->one();
				
			}
		
		}
		
	}
	//МОДУЛЬ СЛУЧАЙНЫХ ПРОДУКТОВ. УСТАНОВЛЕН ТОЛЬКО 4 ТОВАРА. 
	//ЛОГИКА СЛУЧАЙНЫХ КОЛ-ВА ТОВАРА НЕ ПРОДУМАН
	public function getRandomItems(){
		
		$count = count(static::find()->all());
		
		$rand = [
			rand(1, $count),
			rand(1, $count),
			rand(1, $count),
			rand(1, $count),
		];
		
		return $data = [
			static::find()->where(['id' => $rand[0]])->asArray()->all(),
			static::find()->where(['id' => $rand[1]])->asArray()->all(),
			static::find()->where(['id' => $rand[2]])->asArray()->all(),
			static::find()->where(['id' => $rand[3]])->asArray()->all(),	
		];
		
	}
	
}

//КЛАСС ОПРЕДЕЛЕНИЯ ПОЛЬЗОВАТЕЛЕЙ
class cataloguser extends ActiveRecord{
	
	public static function tableName(){
		
		return '{{user}}';
	
	}
	
	public function getUser($param){
		
		//var_dump(static::find()->select(['name', 'subname'])->where(['id' => $param])->asArray()->one());
		
		return static::find()->select(['name', 'subname'])->where(['id' => $param])->asArray()->one();
	
	}
	
}

//КЛАСС ОТЗЫВОВ
class comment extends ActiveRecord{
	
	public static function tableName(){
		
		return '{{cat_comment}}';
	
	}
	
	public function getComment($param){
		
		$user = new cataloguser();
		
		if(empty($param['get'])){
			
			$id = 1;
			
			$data['table'] = static::find()->where(['id_product' => $id])->asArray()->all();
			
		}else if(!empty($param['get'])){
			
			if(empty($param['get']['product'])){
				
				$id = 1;
				
				$data['table'] = static::find()->where(['id_product' => $id])->asArray()->all();
				
				
			}else if(!empty($param['get']['product'])){
				
				$data['table'] = static::find()->where(['id_product' => $param['get']['product']])->asArray()->all();
				
				foreach ($data['table'] as $key => $value){
					
					$id = $data['table'][$key]['id_user'];
					
					$data['user'][$key] = $user->getUser($id);
										
				}

			}
			
		}

		return [
			'primary' => $data['table'],
			'user' => $data['user']
		];
		
	}
	
}