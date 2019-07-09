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


class cart extends ActiveRecord{
	
	public function getAddCart($param){
		
		$addcart = new addcart();
		
		//$product = new product();
		
		$controller = [
			//'model' => $addcart,
			//'db' => $addcart->db($param),
			'object' => $addcart->viewItemObj($param),
			'array' => $addcart->viewItemArr($param)
		];
		
		return $controller;
		
	}
	
	public function getOrder($param){
		
		$model = new order();
		
		if($param['post'] == false){
			
			if($param['session']['status'] == true){
				
				return [
					'model' => $model,
					'data' => $param['session']['data']
				];
				
			}else if($param['session']['status'] == false){
				
				return [
					'data' => false
				];
				
			}
			
		}else if($param['post'] == true){
			
			if(!empty($param['post']['order'])){
				//УДАЛИТЬ ДАННЫЕ ИЗ СЕССИИ. МОДУЛЬ УДАЛЕНИИ ПОЗИЦИИ ИЗ КОРЗИНЫ.
				unset($param['session']['data'][$param['post']['order']['id']]);
				
				unset($_SESSION['cart'][$param['post']['order']['id']]);
			
			}
			
			if(!empty($param['post']['go'])){
				
				$model->insert($param);
				
			}
			
			return [
				'model' => $model,
				'data' => $param['session']['data']
			];
			
		}
		
	}

}

//КЛАСС ДОБАВЛЕНИЯ В КОРЗИНУ
class addcart extends ActiveRecord{
	
	public static function tableName(){
		
		return '{{cat_product}}';
	
	}
	
	public function viewItemObj($param){
		
		if(empty($param['get'])){
			
			$data['error'] = [
				'message' => 'Ошибка добавления товара в корзине'
			];
			
		}else if(!empty($param['get'])){
			
			return static::find()->where(['id_product' => $param['get']['product']])->one();
			
		}
		
	}
	
	public function viewItemArr($param){
		
		if(empty($param['get'])){
			
			$data['error'] = [
				'message' => 'Ошибка добавления товара в корзине'
			];
			
		}else if(!empty($param['get'])){
			
			return static::find()->where(['id_product' => $param['get']['product']])->asArray()->one();
			
		}
		
	}
	
}

class order extends ActiveRecord{

	public static function tableName(){
		
		return '{{cat_order}}';
	
	}
	
	public function rules(){
		
		return[
			[['id', 'id_user','detail'], 'safe'],
        ];
		
	}
	
	public function getSave($param){
		
		//var_dump($param);
		
		//return true;
		
	}
	
}