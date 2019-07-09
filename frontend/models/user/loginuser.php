<?php

namespace frontend\models\user;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\web\IdentityInterface;


class loginuser extends ActiveRecord implements IdentityInterface{
	
	public $verifyCode;
	
	private $_data;
	
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
			['status', 'integer'],
			['status', 'default', 'value' => self::STATUS_DEACTIVE],
			[['login', 'password'], 'match', 'pattern' => '/^([a-zA-A0-9_]+)$/u', 'message' => 'Только латинские буквы!'],
			[['login', 'password'], 'required', 'message' => 'Обязательно к заполнению!'],	
			['password', 'validatePassword'],

        ];
		
	}
	
	
    /**
     * Finds an identity by the given ID.
     *
     * @param string|int $id the ID to be looked for
     * @return IdentityInterface|null the identity object that matches the given ID.
     */
    /**
    * @inheritdoc
    */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds an identity by the given token.
     *
     * @param string $token the token to be looked for
     * @return IdentityInterface|null the identity object that matches the given token.
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * @return int|string current user ID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string current user auth key
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @param string $authKey
     * @return bool if auth key is valid for current user
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }
	
	 /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($login)
    {
        return static::findOne(['login' => $login]);
    }


	

	
	public function authorize(){
		
		if ($this->validate() && !is_null($this->_data = $this->getUser())){
			
			//var_dump(Yii::$app->security->validatePassword($this->password, $user->password));
			
			//print_r($this->rememberme ? 3600*24*30 : 0);
			
			//$identity = \yii::$app->user->identity;
			
			//print_r($this->_data);
			
			
			//return \yii::$app->user->login($identity);
			
			//print_r($identity);
			if($this->validatePassword($this->password)){
				
				return \Yii::$app->user->login($this->getUser(), $this->rememberme ? 3600*24*30 : 0);
				
			}else{
				
				$this->addError($attribute, "Пароль или имя пользователя введены неверно");
				
			}
			
			//return \Yii::$app->user->login($this->getUser(), $this->rememberme ? 3600*24*30 : 0);
			
			
			
		}
		
		return false;
		
	}
	
	public function getUser(){
		
		$this->_data = $this->findByUsername($this->login);
		
		return $this->_data;
		
	}
	
	public function validatePassword($password){
		
		if (!$this->hasErrors()) {
			
			$user = $this->getUser();
			
			if (!$user || !Yii::$app->security->validatePassword($this->password, $user->password)) {
				
                return false;
				//$this->addError($attribute, "Пароль или имя пользователя введены неверно");
            }else{
				
				return true;
				
			}
			
			//var_dump($this->password,Yii::$app->getSecurity()->validatePassword($this->password, $user->password), $user->password);
			//if (!$user || !Yii::$app->security->validatePassword($this->password, $user->password)) {
				
				//

                //$this->addError($attribute, "Пароль или имя пользователя введены неверно");
            //}
			
		}
		
		//var_dump($this->password,Yii::$app->getSecurity()->validatePassword($this->password, $user->password), $user->password);
		
		//var_dump($password);
		
		//var_dump($this->password);

		//return Yii::$app->getSecurity()->validatePassword($password, $this->password);;
		//return Yii::$app->security->validatePassword($password, $this->password);
		
	}

}