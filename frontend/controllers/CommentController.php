<?php
namespace frontend\controllers;

use Yii;
use yii\web\request;
use yii\web\response;
use yii\web\Cookie;
use yii\web\Controller;
use yii\web\BadRequestHttpException;

use yii\filters\AccessControl; //КОНТРОЛЬ ДОСТУПА

use yii\widgets\Pjax;
use yii\widgets\ActiveForm; 

use frontend\models\user\signinuser;
use frontend\models\user\loginuser;
use frontend\models\comment\contact;
use frontend\models\catalog\constructor;
use frontend\models\comment\comment;
use frontend\models\service\service;
use frontend\models\page;
use kartik\date\DatePicker;
/**
 * Site controller
 */
class CommentController extends Controller{
	
	public function actionComments(){
		
		$this->view->title = 'Отзывы о компании РИТГРАН';
		
		$comment = new comment();
		
		$comments = $comment->tenComment();
		
		$pages = $comment->paginationComment();
		
		if($comment->load(Yii::$app->request->post())){
			
			if($comment->validate() == true){
			
				if (Yii::$app->request->isPjax == true) {
				
					if($comment->saveComment() == true){
					
						$messagecomment = 'ok';
					
						return $this->render('comments', compact('comment', 'comments', 'pages', 'messagecomment'));
					
					}else if($comment->saveComment() == false){
						
						$messagecomment = 'no';
						
						return $this->render('comments', compact('comment', 'comments', 'pages', 'messagecomment'));
						
					}
				
				}else if(Yii::$app->request->isPjax == false){
				
					$messagecomment = 'no';
				
					return $this->render('comments', compact('comment', 'comments', 'pages', 'messagecomment'));
				
				}
			}
			
		}else{
		    
		    $messagecomment = false;
			
			return $this->render('comments', compact('comment', 'comments', 'pages', 'messagecomment'));
			
		}
		
	}
	
	public function actionValidateComment(){
		
		$comment = new comment();
		
		if(Yii::$app->request->isAjax && $comment->load(Yii::$app->request->post())){
						
			Yii::$app->response->format = Response::FORMAT_JSON;

			return ActiveForm::validate($comment);
			
		}
		
	}
	
}