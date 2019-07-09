<?php
namespace frontend\controllers;

use Yii;
use yii\web\request;
use yii\web\response;
use yii\web\Cookie;
use yii\web\Controller;
use yii\web\BadRequestHttpException;

use yii\filters\AccessControl; //КОНТРОЛЬ ДОСТУПА

use frontend\models\user\signinuser;
use frontend\models\user\loginuser;
use frontend\models\contact\contact;
use frontend\models\catalog\constructor;
use frontend\models\catalog\cart;
use frontend\models\comment\comment;
use frontend\models\service\service;
use frontend\models\page;
use kartik\date\DatePicker;

/**
 * Class ServiceController
 * @package frontend\controllers
 */
class ServiceController extends Controller{
    /**
     * @return string
     */
	public function actionServices(){
		
		$this->view->title = 'Наши услуги РИТГРАН';

		$authuser = new loginuser();
		
		$cart = new service();
		
		if($cart->load(Yii::$app->request->post())){
			
			if(Yii::$app->request->isPjax == true) {
				
				$data = Yii::$app->request->post();
				
				$session = Yii::$app->session;
				
				if ($session->isActive){
				
					$session['cart'] = [
						'type' => $data->type,
						'category' => $data->category,
					];
					
				}
				
				//return $this->render('services', compact('authuser', 'cart'));
				
			}else if(Yii::$app->request->isPjax == false){
				
				
				
			}
			
		}else{
		
			return $this->render('services', compact('authuser', 'cart'));
			
		}
		
	}
    /**
     *
     */
	public function actionAddCart(){
	
	    $model = new Cart();
	    
	    $id = Yii::$app->request->get('service');
        
        $data = $model->getOtherCart($id);
        
        $i = 1;
        
        if(Yii::$app->session->has('cart')){
            
            $cart = Yii::$app->session['cart'];
            
        }else{
            
            $cart = [];
            
        }
        
        $cart[] = [
            'id' => $data['id'],
            'sku' => $data['sku'],
            'name' => $data['name'],
            'price' => $data['price'],
            'date' => date("Y-m-d H:i:s"),
            'type' => $data['type']
        ];
        
        Yii::$app->session->set('cart', $cart);
        
        $this->redirect('\service\services');
        
	}
	
}