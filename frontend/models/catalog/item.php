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

class item{

	/**
	 * @param $param
	 */
	public function getItem($param){

		$product = new product();
        
        $comment = new comment();
        
        $user = new user();

		if(empty($param['post']) && empty($param['get'])){

			$get = false;

		}else if(!empty($param['post']) && empty($param['get'])){

			$post = $param['post'];

		}else if(!empty($param['get']) && empty($param['post'])){

			$get = $param['get'];

		}
        
        $c = $comment->getComment($get);
        
        foreach($c as $key => $value){
            
            $result[$key] = $user->getUser($c[$key]['id_user']);
        
        }
        
        unset($param);

		$data = [
			'model' => $product,
			'item' => $product->getItem($get),
            'randomitem' => $product->getRandomItems(),
            'user' => $result,
            'modelcomment' => $comment,
			'comment' => $comment->getComment($get),
			'savecomment' => $comment->getSaveComment($post)
			
		];

		return $data;

	}

}


class product extends ActiveRecord{
 
	public static function tableName(){

		return '{{cat_product}}';

	}

	public function getItem($param){
        
        if(empty($param)){
        
            $data = static::find()->where(['id' => 1])->asArray()->one();
            
        }else if(!empty($param)){
    
            $data = static::find()->where(['id' => $param])->asArray()->one();
        }
  
		return $data;

	}
	
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

class comment extends ActiveRecord{
    
    public $verifyCode;
    
    public static function tableName(){
        
        return '{{cat_comment}}';
        
    }
    
    public function rules(){
        
        return[
            [
                'verifyCode',
                \himiklab\yii2\recaptcha\ReCaptchaValidator::className(),
                'secret' => '6Lf8bqgUAAAAAPtrOxmwWtM_67tqSrydsl2LkrWi',
                'uncheckedMessage' => 'Просим пройти верификацию!',
                'when' => function($model){
                    return !$model->getErrors() && !Yii::$app->request->isAjax;
                },
            ],
            [['id_product','id_user','level','comment'], 'safe'],
        ];
        
    }
    
    public function getComment($id){
    
        if(empty($id)){
    
            return static::find()->where(['id_product' => 1])->asArray()->all();
        
        }else if(!empty($id)){
    
            return static::find()->where(['id_product' => $id])->asArray()->all();
        
        }
    
    }
    
    public function getSaveComment($param){
    
        return 0;
    
    }
    
}

class user extends ActiveRecord{
    
    public static function tableName(){
        
        return '{{user}}';
        
    }
    
    public function getUser($id){
        
        return static::find()->select(['name', 'subname'])->where(['id' => $id])->asArray()->one();
        
    }
    

}