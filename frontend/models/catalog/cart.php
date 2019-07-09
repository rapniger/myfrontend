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

/**
 * Class cart
 * @package frontend\models\catalog
 */
class cart extends ActiveRecord{
	/**
	 * @param $param
	 */
	public function getCart($param){

		$product = new product();
        
        $user = new user();
        
        $data['model'] = $product;

		if($param['user'] == false){
		    
		    if($param['cart'] == false){
		    
		        $data = false;
		        
		    }else{
		        
		        foreach($param['cart'] as $key => $value){
		            
		            if($param['cart'][$key]['type'] == 'product') {
            
                        $data['items'][] = $product->getItem($param['cart'][$key]['id']);
            
                    }else if($param['cart'][$key]['type'] == 'other'){
                    
                        $data['item'][] = $this->getOtherCart($param['cart'][$key]['id']);
                    
                    }
		            
		        }
		        
		    }
            
		}else if(!empty($param['user'])){
            
            if($param['cart'] == false){
                
                $data = false;
                
            }else{
                
                $data['user'] = $user->getUser($param['user']);
                
                foreach($param['cart'] as $key => $value){
    
                    if($param['cart'][$key]['type'] == 'product') {
        
                        $data['items'][] = $product->getItem($param['cart'][$key]['id']);
        
                    }else if($param['cart'][$key]['type'] == 'other'){
        
                        $data['items'][] = $this->getOtherCart($param['cart'][$key]['id']);
        
                    }
                    
                }
                
            }
		
		}
        
		return $data;

	}
    /**
     * @param $param
     * @return array
     */
	public function getAddCart($param){
	    
	    $product = new product();
	    
	    $data = [
            'object' => false,
            'array' => false
        ];
	    
	    if(!empty($param['get'])) {
        
            $data = [
                'object' => $product->getObjectProduct($param['get']['product']['id']),
                'array' => $product->getArrayProduct($param['get']['product']['id'])
            ];
            
        }
        
        if(!empty($param['post'])){
            
            $data = [
                'object' => $product->getObjectProduct($param['post']['product']['id']),
                'array' => $product->getArrayProduct($param['post']['product']['id'])
            ];
            
        }
        
        return $data;
	
	}
    /**
     * @param $param
     * @return array|bool
     */
	public function getSaveCart($param){
	    
	    $product = new product();
	    
	    $user = new user();
	
	    $db = new savecart();
	
	    if(empty($param)){
	        
	        $data = false;
	        
	    }else if(!empty($param)){
	        //проверка пользователя, если есть запись, то записываем
	        
	        if(empty($param['user'])){
	        
	            $data = false;
	            
	        }else if(!empty($param['user'])){
        
                if($user->getValidate($param['user'] == false)){
    
                    $data = false;
                    
                }else if($user->getValidate($param['user']) == true){
                
                    if(empty($param['save'])){
                    
                        $data = false;
                    
                    }else if(!empty($param['save'])) {
    
                        foreach($param['save'] as $key => $value) {
        
                            $items[] = $product->getItem($param['save'][$key]['id']);
        
                        }
                        
                        $id_cart = $db->getRandomCart();
    
                        $json = json_encode(['items' => $items, 'user' => $param['user']]);
                        
                        $data = [
                            'status' => $db->getSave($json, $id_cart),
                            'id_cart' => $id_cart
                        ];
                        
                        $update = [
                            'user' => $param['user'],
                            'json' => $json,
                            'id_cart' => $id_cart
                        ];
                        
                        $user->getUpdateInfo($update);
                        
                    }
                    
                }
	        
	        }
     
	    }
	    
	    return $data;
	
	}
    /**
     * @param $param
     * @return bool
     */
	public function getArrayMail($param){
        
        $product = new product();
        
        $user = new user();
        
        $data = false;
        
        if(!empty($param['save'])){
        
            foreach($param['save'] as $key => $value){
            
                $data['product'][] = $product->getItem($param['save'][$key]['id']);
            
            }
            
            $data['user'] = $user->getUserMail($param['user']);
            
            $data['route'] = 'savecart';
            
        }else if(empty($param['save'])){
            
            $data = false;
            
        }
        
        return $data;
	
	}
    /**
     * @param $param
     * @return mixed
     */
    public function getOtherCart($param){
    
        //var_dump($param);
        
        $service[0] = NULL;
        $price[0] = NULL;
        $service[1] .= 'Уход за могилой';
        $price[1] .= 600;
        $sku[1] = 111440;
        $service[2] .= 'Реставрация';
        $price[2] .= 2000;
        $sku[2] = 111441;
        
        $data['id'] = $param;
        $data['sku'] = $sku[$param];
        $data['name'] = $service[$param];
        $data['price'] = $price[$param];
        $data['type'] = 'other';
        
        return $data;
    
    }

}

/**
 * Class product
 * @package frontend\models\catalog
 */
class product extends ActiveRecord{
    /**
     * @var
     */
    public $detail;
    /**
     * @return string
     */
	public static function tableName(){

		return '{{cat_product}}';

	}
    /**
     * @param $param
     * @return array|bool|ActiveRecord|null
     */
	public function getItem($param){
        
        if(empty($param)){
        
            $data = false;
            
        }else if(!empty($param)){
    
            $data = static::find()->where(['id' => $param])->asArray()->one();
        }
  
		return $data;

	}
    /**
     * @param $id
     * @return array|bool|ActiveRecord|null
     */
	public function getObjectProduct($id){
	
	    if(empty($id)){
	    
	        return false;
	    
	    }else if(!empty($id)){
	    
	        return static::find()->where(['id' => $id])->one();
	    
	    }
	
	}
    /**
     * @param $id
     * @return array|bool|ActiveRecord|null
     */
    public function getArrayProduct($id){
    
        if(empty($id)){
        
            return false;
        
        }else if(!empty($id)){
        
            return static::find()->where(['id' => $id])->asArray()->one();
        
        }
    
    }

}

/**
 * Class user
 * @package frontend\models\catalog
 */
class user extends ActiveRecord{
    /**
     * @return string
     */
    public static function tableName(){
        
        return '{{user}}';
        
    }
    /**
     * @param $id
     * @return array|ActiveRecord|null
     */
    public function getUser($id){
        
        return static::find()->select(['name', 'subname'])->where(['id' => $id])->asArray()->one();
        
    }
    
    /**
     * @param $id
     * @return array|ActiveRecord|null
     */
    public function  getUserMail($id){
    
        return static::find()->select(['id', 'name', 'subname', 'email', 'telephone', 'status', 'auth_key'])->where(['id' => $id])->asArray()->one();
    
    }
    /**
     * @param $id
     * @return bool
     */
    public function getValidate($id){
    
        return static::find()->where(['id' => $id])->exists();
    
    }
    /**
     * @param $param
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    public function getUpdateInfo($param){
    
        $model = static::findOne($param['user']);
    
        $query = static::find()->where(['id' => $param['user']])->one();
    
        $query['json_data'] = json_decode($query['json_data'], true);
        
        $query['json_data'] .= $param['json'];
        
        $query['json_data'] = json_encode($query['json_data']);

        $model->json_data = $query['json_data'];
        
        $model->update();
    
    }
    
}

/**
 * Class savecart
 * @package frontend\models\catalog
 */
class savecart extends ActiveRecord{
    /**
     * @return string
     */
    public static function tableName(){
        
        return '{{cart}}';
        
    }
    /**
     * @return string
     * @throws \yii\base\Exception
     */
    public function getRandomCart(){
        
        $i = random_int(8, 10);
        
        $data = Yii::$app->security->generateRandomString($i);
        
        $validate = $this->getValidateNumber($data);
    
        if( $validate == false){
    
            return $data;
            
        }else if($validate == true){
        
            $this->getRandomCart();
        
        }
        
    }
    /**
     * @param $id_cart
     * @return bool
     */
    public function getValidateNumber($id_cart){
    
        return static::find()->where(['id_cart' => $id_cart])->exists();
    
    }
    /**
     * @param $param
     * @param $id_cart
     * @return bool
     */
    public function getSave($param, $id_cart){
        
        $this->id_cart = $id_cart;
    
        $this->date = date("Y-m-d H:i:s");
    
        $this->json = $param;
        
        if($this->save()){
        
            unset($_SESSION['cart']);
            
            return true;
            
        }else{
            
            return false;
            
        }
        
    }

}