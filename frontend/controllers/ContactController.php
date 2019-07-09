<?php
namespace frontend\controllers;

use Yii;
use yii\web\request;
use yii\web\response;
use yii\web\Cookie;
use yii\web\Controller;
use yii\web\BadRequestHttpException;

use yii\widgets\ActiveForm;

use yii\filters\AccessControl; //КОНТРОЛЬ ДОСТУПА

use frontend\models\contact\contact;

/**
 * Site controller
 */
class ContactController extends Controller{
	
	public function actions(){
		
		return [
			
			'captcha' => [
				
				'class' => 'yii\captcha\CaptchaAction',
				
				'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
			
			],
			
		];
		
	}
	
	public function actionContact(){
		
		$this->view->title =  'Контакты РИТГРАН';
		
		$contact = new contact();
		
		if($contact->load(Yii::$app->request->post())){
			
			if($contact->validate() == true){
			
				if (Yii::$app->request->isPjax == true) {
				
					if($contact->saveContact() == true){
					
						$messagecontact = 'ok';
					
						return $this->render('contact', compact('contact', 'messagecontact'));
					
					}
				
				}else if(Yii::$app->request->isPjax == false){
				
					$messagecontact = 'no';
				
					return $this->render('contact', compact('contact', 'messagecontact'));
				
				}
			}
			
		}else{
		    
		    $messagecontact = false;
			
			return $this->render('contact', compact('contact', 'messagecontact'));
			
		}
		
	}
	
	public function actionValidateContact(){
		
		$contact = new contact();
		
		if(Yii::$app->request->isAjax && $contact->load(Yii::$app->request->post())){
						
			Yii::$app->response->format = Response::FORMAT_JSON;

			return ActiveForm::validate($contact);
			
		}
		
	}
	
}