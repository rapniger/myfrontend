<?php

namespace frontend\models\comment;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\web\IdentityInterface;
use yii\data\Pagination;


class comment extends ActiveRecord{
	
	public $verifyCode;
	
	public static function tableName(){
		
		return '{{comment_data}}';
	
	}
	
	
	public function rules(){
		
		return[
			[
				'verifyCode', 
				\himiklab\yii2\recaptcha\ReCaptchaValidator2::className(), 
				'secret' => '6Lf8bqgUAAAAAPtrOxmwWtM_67tqSrydsl2LkrWi', 
				'uncheckedMessage' => 'Просим пройти верификацию!', 
				'when' => function($model){ 
					return !$model->getErrors() && !Yii::$app->request->isAjax; /* !Yii::$app->request->post('ajax')*/
				},
			],
			[['name', 'subname'], 'trim'],
			[['name', 'subname'], 'match', 'pattern' => '/^([а-яА-ЯЁё0-9_]+)$/u', 'message' => 'Только русские буквы!'],
			[['name', 'subname', 'message'], 'required', 'message' => 'Обязательно к заполнению!'],
			['message', 'safe']
        ];
		
	}
	
	//Сохранить коммент
	public function saveComment (){
		
		if($this->validate()){
			
			$this->data = date("Y-m-d H:i:s");
			
			if($this->save()){
				
				return true;
				
			}else{
				
				return false;
				
			}
			
		}else{
			
			return false;
			
		}
		
	}
	
	//Одиночный коммент
	public function selectComment(){
		
		
		
	}
	
	//вывод 4 коммент
	public function fourComment(){
		
		return comment::find()->orderBy(['data' => SORT_DESC])->limit(4)->asArray()->all();
		
	}
	
	//вывод 10 коммент. Зависимый от paginationComment
	public function tenComment(){
		
		$query = comment::find();
		
		$pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 9]);
		
		$comments = $query->offset($pages->offset)->orderBy(['data' => SORT_DESC])->limit($pages->limit)->all();
		
		return $comments;
		
	}
	
	//вывод пагинации. Зависимый от tenComment
	public function paginationComment(){
		
		$query = comment::find();
		
		$pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 9]);
		
		$comments = $query->offset($pages->offset)->orderBy(['data' => SORT_DESC])->limit($pages->limit)->all();
		
		return $pages;
		
	}

}