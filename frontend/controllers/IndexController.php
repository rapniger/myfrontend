<?php
namespace frontend\controllers;

use Yii;
use yii\web\request;
use yii\web\response;
use yii\web\Cookie;
use yii\web\Controller;
use yii\web\BadRequestHttpException;

use yii\widgets\ActiveForm;

use frontend\models\contact\contact;

use frontend\models\comment\comment;
/**
 * Site controller
 */
class IndexController extends Controller{
	/*
	Google Recaptcha
	Ключ сайта 			6LfTipkUAAAAAF8q0qARYxZeEFCmn2R7XQj-nYHJ
	Секретный ключ		6LfTipkUAAAAAGMHF11zP_Axv5WHxwRW2N3NGmcE
	*/	
	public function actionIndex(){
		
		$this->view->title = 'Компания РИТГРАН';
		
		$comment = new comment();
		
		$comments = $comment->fourComment();
		
		$contact = new contact();
		
		if($contact->load(Yii::$app->request->post())){
			
			if($contact->validate() == true){
			
				if (Yii::$app->request->isPjax == true) {
				
					if($contact->saveContact() == true){
					
						$messagecontact = 'ok';
					
						return $this->render('index', compact('contact','comments', 'messagecontact'));
					
					}
				
				}else if(Yii::$app->request->isPjax == false){
				
					$messagecontact = 'no';
				
					return $this->render('index', compact('contact','comments', 'messagecontact'));
				
				}
			}
			
		}else{
		    
		    $messagecontact = false;
			
			return $this->render('index', compact('contact','comments', 'messagecontact'));
			
		}
			
	}
	
	public function actionValidateContact(){
		
		$contact = new contact();
		
		if(Yii::$app->request->isAjax && $contact->load(Yii::$app->request->post())){
						
			Yii::$app->response->format = Response::FORMAT_JSON;

			return ActiveForm::validate($contact);
			
		}
		
	}
	
	public function actionError(){
		
		$this->view->title = 'Страница не существует';
		
		return $this->render('error');
		
	}
	
}



