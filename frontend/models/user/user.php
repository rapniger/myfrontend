<?php

namespace frontend\models\user;

//use Yii;
//use yii\base\NotSupportedException;
//use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
//use yii\helpers\ArrayHelper;
use yii\web\IdentityInterface;


class user extends ActiveRecord implements IdentityInterface
{
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
    * Finds user by username
    *
    * @param string $username
    * @return static|null
    */
        public static function findByUsername($username)
        {
            foreach (self::$users as $user) {
                if (strcasecmp($user['username'], $username) === 0) {
                    return new static($user);
                }
            }

            return null;
        }

         /**
         * Validates password
         *
         * @param string $password password to validate
         * @return bool if password provided is valid for current user
         */

        public function validatePassword($password)
        {
            return $this->password === $password;
        }
		
		public function beforeSave($insert)
		{
			if (parent::beforeSave($insert)) {
				if ($this->isNewRecord) {
					$this->auth_key = \Yii::$app->security->generateRandomString();
				}
				return true;
			}
			return false;
		}

}