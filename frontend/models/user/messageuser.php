<?php

namespace frontend\models\user;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use yii\web\request;
//use yii\web\UploadedFile;
//use yii\web\User;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
//use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\web\IdentityInterface;
use yii\data\Pagination;


class messageuser extends ActiveRecord{
	
	public $verifyCode;
	
	const STATUS_ACTIVE = 10;
	
	const STATUS_DEACTIVE = 0;
	
	
	public static function tableName(){
		
		return '{{message_data}}';
	
	}
	
	
	public function rules(){
		
		return[
			[
				'verifyCode', 
				\himiklab\yii2\recaptcha\ReCaptchaValidator::className(), 
				'secret' => '6Lf8bqgUAAAAAPtrOxmwWtM_67tqSrydsl2LkrWi', 
				'uncheckedMessage' => 'Просим пройти верификацию!', 
				'when' => function($model){ 
					return !$model->getErrors() && !Yii::$app->request->isAjax; 
				},
			],
			['message', 'safe'],	
        ];
		
	}
	
	
	public function saveMessage(){
		
		if($this->validate()){
			
			$this->data = date("Y-m-d H:i:s");
			
			$this->id_user = \Yii::$app->user->identity->id;
			
			$this->id_admin = 0;
			
			if($this->save()){
				
				return true;
				
			}else{
				
				return false;
				
			}
			
		}else{
			
			return false;
			
		}
		
	}
	
	public function getMessages(){
		
		$id_user = \Yii::$app->user->identity->id;
		
		$pages = new Pagination(['totalCount' => MessageUser::find()->where(['id_user' => $id_user])->count(), 'pageSize' => 10]);
		
		$messages['user'] = MessageUser::find()->where(['id_user' => $id_user])->offset($pages->offset)->orderBy(['data' => SORT_DESC])->limit($pages->limit)->asArray()->all();
		
		$a = 0;
		
		$b = MessageUser::find()->where(['id_user' => $id_user])->count();
		
		usort($messages, function($a, $b){ return ($a['data'] < $b['data']);});
		
		return $messages;
		
	}
	
	public function getPagination(){
		
		$id_user = \Yii::$app->user->identity->id;
		
		$pages = new Pagination(['totalCount' => MessageUser::find()->where(['id_user' => $id_user])->count(), 'pageSize' => 10]);
		
		return $pages;
			
	}

}