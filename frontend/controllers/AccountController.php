<?php

namespace frontend\controllers;

use yii\filters\VerbFilter;

use Yii;
use yii\web\request;
use yii\web\response;
use yii\web\Cookie;
use yii\web\Controller;
use yii\web\BadRequestHttpException;
use yii\web\User;

use yii\filters\AccessControl; //КОНТРОЛЬ ДОСТУПА
//use yii\filters\VerbFilter;

use yii\widgets\ActiveForm;
use yii\widgets\ActiveField;


use frontend\models\user\accountuser;
use frontend\models\user\signinuser;
use frontend\models\user\loginuser;
use frontend\models\user\messageuser;


use kartik\date\DatePicker;

/**
 * Default controller for the `account` module
 */
class AccountController extends Controller
{
	public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signin'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['signin'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['signout'],
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
	
	
    /**
     * Renders the index view for the module
     * @return string
     */
	public function actionSignin(){
		
		$this->view->title = 'Регистрация';
		
		$signinuser = new signinuser();
		
		if (!Yii::$app->user->isGuest) {
			
			 return $this->redirect('/index/index');
			
        }else if(Yii::$app->user->isGuest) {
			
			if($signinuser->load(Yii::$app->request->post())){
				
				if (Yii::$app->request->isPjax == true) {
					
					if($signinuser->login() == true){
						
						/*ОТПРАВКА ПИСЬМА ОБЯЗАТЕЛЬНО*/
							
						$messagecontact = 'ok';
					
						return $this->render('signin', compact('signinuser', 'messagecontact'));
								
					}else if($signinuser->login() == false){
								
						$messagecontact = 'no';
				
						return $this->render('index', compact('signinuser', 'messagecontact'));
						
					}
						
				}else if(Yii::$app->request->isPjax == false){
					
					$messagecontact = false;
				
					return $this->render('index', compact('signinuser', 'messagecontact'));
					
					
				}
				
			}else{
				
				$messagecontact = false;
				
				return $this->render('signin', compact('signinuser', 'messagecontact'));
				
			}
			
        }
		
	}
	
	public function actionValidateSignin(){
		
		$signinuser = new signinuser();
		
		if(Yii::$app->request->isAjax && $signinuser->load(Yii::$app->request->post())){
									
			Yii::$app->response->format = Response::FORMAT_JSON;

			return ActiveForm::validate($signinuser);
			
		}
		
	}	   

	public function actionAuthorize(){
		
		$this->view->title = 'Вход в систему';
		
		$loginuser = new loginuser();
		
		if (!Yii::$app->user->isGuest) {
			
			return $this->goHome();
			
        }else if(Yii::$app->user->isGuest) {
			
			//var_dump($loginuser->authorize());
			
			if($loginuser->load(Yii::$app->request->post())){
			
				if(Yii::$app->request->isPjax == true) {
				
					if($loginuser->authorize() == true){
					
						return $this->goHome();
				
					}else if($loginuser->authorize() == false){
					
						$messageauth = 'error';
						//var_dump(Yii::$app->request->post());
						return $this->render('authorize', compact('loginuser', 'messageauth'));
					
					}
				
				}else if(Yii::$app->request->isPjax == false){
				    
				    $messageauth = 'error';
				
					return $this->render('authorize', compact('loginuser', 'messageauth'));
					
				}
				
			}else{
			    
			    $messageauth = false;
				
				return $this->render('authorize', compact('loginuser', 'messageauth'));
				
			}
			
		}
		
	}
	
	public function actionValidateAuthorize(){
		
		$loginuser = new loginuser();
		
		if(Yii::$app->request->isAjax && $loginuser->load(Yii::$app->request->post())){
									
			Yii::$app->response->format = Response::FORMAT_JSON;

			return ActiveForm::validate($loginuser);
			
		}
		
	}
	
	public function actionAccount(){
		
		$model = new accountuser();
		
		if (!Yii::$app->user->isGuest) {
			
			return $this->render('account', compact('model'));
            
			
        }else if(Yii::$app->user->isGuest) {
			
			return $this->goHome();
			
		}
		
	}
	
	public function actionSignout(){
		
		\Yii::$app->user->logout();

        return $this->goHome();
		
	}
	
	public function actionMessage(){
		
		$this->view->title = 'Сообщения';
				
		$messageuser = new messageuser();
		
		$pages = $messageuser->getPagination();
		
		//$pages = $pages['pagination'];
		
		$messages = $messageuser->getMessages();
		
		if (Yii::$app->user->isGuest) {
			
			 return $this->redirect('/index/index');
			
        }else if(!Yii::$app->user->isGuest) {
			
			if($messageuser->load(Yii::$app->request->post())){
			
				if (Yii::$app->request->isPjax == true) {
						
					if($messageuser->saveMessage() == true){
						
						$message = 'ok';
						
						return $this->render('messageuser', compact('messageuser', 'messages', 'pages', 'message'));
						
					}else{
						
						$message = 'no';
						
						return $this->render('messageuser', compact('messageuser', 'messages', 'pages', 'message'));
						
					}
						
				}
			
			}else{
			    
			    $message = false;
				
				return $this->render('messageuser', compact('messageuser', 'messages', 'pages', 'message'));
				
			}
			
		}
		
	}
	
	public function actionValidateMessage(){
		
		$messageuser = new messageuser();
		
		if(Yii::$app->request->isAjax && $messageuser->load(Yii::$app->request->post())){
									
			Yii::$app->response->format = Response::FORMAT_JSON;

			return ActiveForm::validate($messageuser);
			
		}
		
	}

/*   public function actionSignin(){
		
		$model = new SigninUser();
		
		if (!Yii::$app->user->isGuest) {
			
            return $this->redirect('/page/index');
			
        }else if(Yii::$app->user->isGuest) {
			
			return $this->render('signin', compact('model'));
			
        }
		
    }
	
	public function actionSignok(){
		
		$html = new Page();
		
		$html->title = 'Успешно создан аккаунт!';
		
		$this->view->title = $html->title;
		
		return $this->render('signok');
		
	}
	
	public function actionSignerror(){
		
		$html = new Page();
		
		$html->title = 'Ошибка регистрации!';
		
		$this->view->title = $html->title;
		
		return $this->render('signerror');
		
	}
	
	public function actionAuthorize(){
		
		$model = new LoginUser();
		
		if (!Yii::$app->user->isGuest) {
			
            return $this->goHome();
			
        }else if(Yii::$app->user->isGuest) {
			
			return $this->render('authorize', compact('model'));
			
		}
		
	}
	
	public function actionAccount(){
		
		$model = new AccountUser();
		
		if (!Yii::$app->user->isGuest) {
			
			return $this->render('account', compact('model'));
            
			
        }else if(Yii::$app->user->isGuest) {
			
			return $this->goHome();
			
		}
		
	}
	
	public function actionSignout(){
		
		\Yii::$app->user->logout();

        return $this->goHome();
		
	}
	*/
}
