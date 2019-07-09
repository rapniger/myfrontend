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


class signinuser extends ActiveRecord{
	
	public $verifyCode;
	
	const STATUS_ACTIVE = 10;
	
	const STATUS_DEACTIVE = 0;
	
	
	public static function tableName(){
		
		return '{{user}}';
	
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
			['rememberme', 'default', 'value' => '0'],
			['databirth', 'default', 'value' => '1111-11-11'],
			['status', 'integer'],
			['status', 'default', 'value' => self::STATUS_DEACTIVE],
			[['name', 'subname'], 'trim'],
			[['name', 'subname'], 'match', 'pattern' => '/^([а-яА-ЯЁё0-9_]+)$/u', 'message' => 'Только русские буквы!'],
			['login', 'match', 'pattern' => '/^([a-zA-A0-9_]+)$/u', 'message' => 'Только латинские буквы!'],
			['telephone', 'match', 'pattern' => '/((8|\+7)-?)?\(?\d{3,5}\)?-?\d{1}-?\d{1}-?\d{1}-?\d{1}-?\d{1}((-?\d{1})?-?\d{1})?/', 'message' => 'Формат ввода 89004561212 или +79004561212!'],
			['telephone', 'string', 'length' => [11, 12], 'message' =>'Проверьте номер телефона!'],
			['agreelaw', 'boolean', 'strict' => true],
			['databirth', 'date', 'format' => 'php:Y-m-d', 'message' => 'Формат ввода: ГОД-МЕСЯЦ-ЧИСЛО'],
			['login', 'unique', 'targetClass' => SigninUser::className(), 'message' => 'Этот логин уже занят'],
			['email', 'unique', 'targetClass' => SigninUser::className(), 'message' => 'Этот email уже занят'],
			//['login', 'unique', 'targetAttribute' => 'password', 'message' => 'Логин и пароль не должны совпадать!'],
			[['name', 'subname', 'email', 'telephone', 'login', 'password', 'password_repeat'], 'required', 'message' => 'Обязательно к заполнению!'],
			['agreelaw', 'required', 'message' => 'Без Вашего согласия не можем принять персональных данных!'],
			['telephone', 'number', 'message' => 'Форма ввода: 89001234567'],
            ['email', 'email', 'message'=>'Форма ввода: NAME@SERVER.RU'],
			['password', 'compare', 'compareAttribute' => 'password_repeat', 'message' => "Пароли не соответствуют!"],	
			//['password_repeat', 'compare', 'compareAttribute' => 'password', 'message' => "Пароли не соответствуют!"],	

        ];
		
	}
	
	
	public function login(){
		
		if($this->validate()){
			
			$this->auth_key = \Yii::$app->security->generateRandomString();
			
			if($this->password == $this->password){
			
				$this->password = \Yii::$app->getSecurity()->generatePasswordHash($this->password);
			
				$this->password_repeat = $this->password;
			
			}else{
				
				return false;
				
			}
			
			$this->json_data = json_encode('{"information":{"user-agent" : "'.\Yii::$app->request->userAgent.'","IP_create_account" : "'.\Yii::$app->request->userIP.'","create_account" : "Дата создания аккаунта",},"account":{"login_vk":"","pass_vk":"","login_ok":"","pass_ok":""},"update_date": {"update_account":"Обновление информации"}}');
			
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