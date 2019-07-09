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
//use frontend\models\catalog\constructor;
use frontend\models\catalog\catalog;
use frontend\models\catalog\item;
use frontend\models\catalog\cart;
use frontend\models\email\email;

use kartik\date\DatePicker;

/**
 * Class ShopController
 * @package frontend\controllers
 */
class ShopController extends Controller{
 
	public function actionConstructor(){

		//$this->view->title = 'Просмотр товара РИТГРАН';фвфы

	}
    /**
     * @return string
     */
	public function actionCatalog(){
		
		$this->view->title = 'Каталог от "РИТГРАН"';
		
		$model = new catalog();
		
		$param = [
			'post' => Yii::$app->request->post(),
			'get' => Yii::$app->request->get(),
		];
		
		$data = $model->getCatalog($param);
		
		return $this->render('catalog', compact('data'));
		
	}
    /**
     * @return string
     */
	public function actionItem(){
		
		$this->view->title = 'Просмотр товара';
        
        $model = new item();
        
        $param = [
            'post' => Yii::$app->request->post(),
            'get' => Yii::$app->request->get(),
        ];
        
        $data = $model->getItem($param);
        
        return $this->render('item', compact('data'));
		
	}
    
    /**
     * @return string
     */
	public function actionCart(){
		
		$this->view->title = 'Корзина товаров';
		
		$model = new cart();
		
		if(yii::$app->session->has('cart') == false){
		
            $session = false;
		
		}else if(yii::$app->session->has('cart') == true){
		
		    $session = Yii::$app->session['cart'];
		
		}
		
		if(Yii::$app->user->isGuest){
		    
		    //Если это гость
		    $user = false;
		    
		}else{
		    
		    //Если это пользователь
		    $user = Yii::$app->user->identity->id;
		    
		}
		
	    $param = [
	        'cart' => $session,
	        'user' => $user,
	        'post' => Yii::$app->request->post(),
	        'get' => Yii::$app->request->get()
        ];
        
        $data = $model->getCart($param);
        
        return $this->render('cart', compact('data'));
		
	}
    /**
     *
     */
    public function actionAddCart(){
        
        $model = new cart();
        
        $param = [
            'get' => Yii::$app->request->get(),
            'post' => Yii::$app->request->post()
        ];
        
        $data = $model->getAddCart($param);
        
        $i = 1;
    
        if(Yii::$app->session->has('cart')){
        
            $cart = Yii::$app->session['cart'];
        
        }else{
        
            $cart = [];
        
        }
        
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
                'date' => date("Y-m-d H:i:s"),
                'type' => 'product'
            ];
        
        }
    
        Yii::$app->session->set('cart', $cart);
        //РЕДИРЕКТ ПОСЛЕ ДОБАВЛЕНИЯ СЕССИИ
        $get = Yii::$app->request->get();
        
        if(empty($get)){
        
            $url = '\shop\catalog';
        
        }else if(!empty($get)){
            
            $url = '\shop\catalog?'.'product[price_ionslider]='.$get['product']['price_ionslider'].'&product[price_sort]='.$get['product']['price_sort'].'&product[category]='.$get['product']['category'].'&page='.$get['page'].'&per-page='.$get['per-page'];
        
        }
        
        $this->redirect($url);
        
    }
    
    /**
     * @return Response
     */
    public function actionDelCart(){
        
        if(Yii::$app->request->isPjax == true){
    
            $post = Yii::$app->request->post();
            
            if(Yii::$app->session->has('cart')){
                
                unset($_SESSION['cart'][$post['product']['id']]);
                
            }
            
        }
        
        return $this->redirect('/shop/cart');
    
    }
    
    /**
     * @return string
     */
    public function actionSaveCart(){
        
        $model = new cart();
        
        $mail = new email();
        
        //var_dump($mail->getHtmlMail());
        
        if(Yii::$app->user->isGuest){
            
            $data = false;
            
        }else if(!Yii::$app->user->isGuest){
            
            $param = [
                'save' => Yii::$app->session['cart'],
                'user' => Yii::$app->user->identity->id,
            ];
            
            $data_mail = $model->getArrayMail($param);
            
            $user = $data_mail['user'];
            
            $product = $data_mail['product'];
            
            $route = $data_mail['route'];
            
            //var_dump($route);
    
            $data = $model->getSaveCart($param);
            
        }
        
        if(Yii::$app->request->isPjax == true){
            
            if($data == false){
        
                $view = 'false-save-cart';
        
        
        
            }else if($data['status'] == true){
        
                $view = 'true-save-cart';
        
                $mail->getSendMail($user, $route, $product);
        
            }
            
        }else if(Yii::$app->request->isPjax == false){
        
            $view = 'false-save-cart';
        
        }
    
        return $this->renderPartial($view, compact('data'));
        
    }

}

