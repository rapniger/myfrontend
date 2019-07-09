<?php
namespace frontend\controllers;

use Yii;
use yii\web\request;
use yii\web\response;
use yii\web\Cookie;
use yii\web\session;
use yii\web\Controller;
use yii\web\BadRequestHttpException;

use yii\filters\AccessControl; //КОНТРОЛЬ ДОСТУПА

use frontend\models\user\signinuser;
use frontend\models\user\loginuser;
use frontend\models\contact\contact;
use frontend\models\catalog\constructor;
use frontend\models\catalog\catalog;
use frontend\models\catalog\cart;
use frontend\models\comment\comment;
use kartik\date\DatePicker;
/**
 * Site controller
 */
class ShopController extends Controller{
	//КЛАСС КОНСТРУКТОРА 3-D
	public function actionConstructor(){
		
		$this->view->title = 'Конструктор от РИТГРАН';
		
		/**/
		
		$model = new constructor();
		
		$array = $model->getActiveForm();
		
		if($model->load(Yii::$app->request->post())){
				
			if (Yii::$app->request->isPjax == true) {
				
				echo "jkgbhjghhgj jgj jhg ";
				
			}
				
		}
		
		return $this->render('constructor', compact('model', 'array'));
		
	}
	//КЛАСС "КАТАЛОГА"
	public function actionCatalog(){
		
		$this->view->title = 'Каталог';
		
		$model = new catalog();
		
		$param = [
			'post' => Yii::$app->request->post(),
			'get' => Yii::$app->request->get()
		];
		
		$data = $model->getCatalog($param);
		
		return $this->render('catalog', compact('data'));
		
	}
	//КЛАСС ПРОСМОТРА ТОВАРА
	public function actionItem(){
		
		$this->view->title = 'Просмотр товара РИТГРАН';
		
		$model = new catalog();
		
		$param = [
			'get' => Yii::$app->request->get()
		];
		
		$data = $model->getItem($param);
		
		return $this->render('single', compact('data'));
		
	}
	//КЛАСС ПРОСМОТРА
	public function actionAddCart(){

		$model = new cart();

		$data = [
			'get' => Yii::$app->request->get(),
			'post' => Yii::$app->request->post()
		];

		$data = $model->getAddCart($data);
		
		$session = Yii::$app->session;
		
		if($session->has('cart')){
		
			$cart = $session['cart'];
			
		}else{
			
			$cart = [];
			
		}
		
		$i = 1;
		
		if(isset($cart[$data['object']->id])){
			
			$cart[$data['object']->id][$i] += $i;
			
		}else{
			
			$cart[] = [
				'id' => $data['array']['id'],
				'id_product' => $data['array']['id_product'],
				'sku' => $data['array']['sku'],
				'name' => $data['array']['name'],
				'price' => $data['array']['price'],
				'image_full' => '/'.$data['array']['img_full'].'/'.$data['array']['file'],
				'image_thumb' => '/'.$data['array']['img_thumb'].'/'.$data['array']['file'],
				'date' => date("Y-m-d H:i:s")
			];
			
		}
		
		$session->set('cart', $cart);
		
		$this->redirect('\shop\catalog');
		
	}

	public function actionOrder(){
		
		$this->view->title = 'Корзина товаров';
		
		$model = new cart();
		//СОБИРАЕМ ДАННЫЕ ИЗ СЕССИИ
		if(Yii::$app->session->has('cart')){
			
			$session_data = [
				'status' => true,
				'data' => Yii::$app->session['cart']
			];
			
		}else{
			
			$session_data = [
				'status' => false
			];
			
		}
		
		if(Yii::$app->user->isGuest) {
			
			if(Yii::$app->request->isPjax == true){
			
				$param = [
					'post' => Yii::$app->request->post(),
					'session' => $session_data,
					'id_user' => false
				];
				
			}else if(Yii::$app->request->isPjax == false){
				
				$param = [
					'post' => false,
					'session' => $session_data,
					'id_user' => false
				];
				
			}
			
		}else if(!Yii::$app->user->isGuest){
			
			if(Yii::$app->request->isPjax == true){
			
				$param = [
					'post' => Yii::$app->request->post(),
					'session' => $session_data,
					'id_user' => Yii::$app->user->identity->id
				];
				
			}else if(Yii::$app->request->isPjax == false){
				
				$param = [
					'post' => false,
					'session' => $session_data,
					'id_user' => Yii::$app->user->identity->id
				];
				
			}
			
		}
		
		$data = $model->getOrder($param);
			
		return $this->render('order', compact('data'));
		
	}
	
	public function actionSaveOrder(){
		
		var_dump(Yii::$app->request->post());
		
	}
	
	
}


/*
u0321227_yii2
2P1o3O5l



public function actionOrder(){
		
		$this->view->title = 'Просмотр товара РИТГРАН';
		
		$model = new cart();
		
		if (!Yii::$app->user->isGuest) {
			
			if(Yii::$app->session->has('cart')){
				
				$param = [
					'auth' => true,
					'id_user' => Yii::$app->user->identity->id,
					'param' => Yii::$app->session['cart']
				];
				
			}else{
				
				$param = [
					'auth' => true,
					'param' =>  Yii::$app->session['cart'],
					'id_message' => 0,
					'message' => 'Корзина пустая'
				];
				
			}
			
		}else{
			
			if(Yii::$app->session->has('cart')){
				
				$param = [
					'auth' => false,
					'param' => Yii::$app->session['cart'],
					'id_message' => 1,
					'message' => 'Зарегистрироваться'
				];
				
			}else{
				
				$param = [
					'auth' => false,
					'param' =>  Yii::$app->session['cart'],
					'id_message' => 0,
					'message' => 'Корзина пустая'
				];
				
			}
			
		}
		//var_dump(Yii::$app->session['cart']['0']);
		
		if($param['auth'] == true){
			
			if(empty(Yii::$app->request->post())){
				
				$data = $model->getOrderRead($param);
				
			}else if(!empty(Yii::$app->request->post())){
				
				$data = $model->getOrderInsert($param);
				
			}
			
		}else if($param['auth'] == false){
			
			$data = $model->getOrderRead($param);
			
		}
		
		if(Yii::$app->request->isPjax == true){
			
			$post = Yii::$app->request->post();
			
			if(Yii::$app->session->has('cart')){
				
				//var_dump($post);
				
				unset($_SESSION['cart'][$post['order']['id']]);
				
				return $this->redirect('/shop/order');
				
			}
			
		}else if(Yii::$app->request->isPjax == false){
			
			return $this->render('order', compact('data'));
			
		}
		
	}


*/
?>
