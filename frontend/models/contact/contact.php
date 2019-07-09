<?php

namespace frontend\models\contact;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\web\IdentityInterface;


class contact extends ActiveRecord{
	
	public $verifyCode;
	
	public static function tableName(){
		
		return '{{contact_data}}';
	
	}
	
	
	public function rules(){
		
		return[
			[
				'verifyCode', 
				\himiklab\yii2\recaptcha\ReCaptchaValidator::className(), 
				'secret' => '6Lf8bqgUAAAAAPtrOxmwWtM_67tqSrydsl2LkrWi', 
				'uncheckedMessage' => 'Просим пройти верификацию!', 
				'when' => function($model){ 
					return !$model->getErrors() && !Yii::$app->request->isAjax; /* !Yii::$app->request->post('ajax')*/
				},
			],
			[['name', 'subname'], 'trim'],
			[['name', 'subname'], 'match', 'pattern' => '/^([а-яА-ЯЁё0-9_]+)$/u', 'message' => 'Только русские буквы!'],
			['message', 'safe'],
			['telephone', 'match', 'pattern' => '/((8|\+7)-?)?\(?\d{3,5}\)?-?\d{1}-?\d{1}-?\d{1}-?\d{1}-?\d{1}((-?\d{1})?-?\d{1})?/', 'message' => 'Формат ввода 89004561212 или +79004561212!'],
			['telephone', 'string', 'length' => [11, 12], 'message' =>'Проверьте номер телефона!'],
			[['name', 'subname', 'email', 'telephone', 'message'], 'required', 'message' => 'Обязательно к заполнению!'],
			['telephone', 'number', 'message' => 'Форма ввода: 89001234567'],
            ['email', 'email', 'message'=>'Форма ввода: NAME@SERVER.RU'],

        ];
		
	}
	
	
	public function saveContact (){
		
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

}