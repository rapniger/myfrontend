<?php
namespace frontend\models\email;

use yii\base\Model;
use yii;

/**
 * Class email
 * @package frontend\models\email
 */
class email {

    private $from_mail = 'ritgran@yandex.ru';

    public function getSendMail($user, $route, $product){
        
        ///var_dump($route);
        
        switch($route){
        
            case ('savecart'):
                $route = 'savecart';
                $subject = 'Детали заказа от компании "РИТГРАН"';
                break;
                
            case ('contact'):
                $route = 'contact';
                $subject = 'Детали обратной связи от компании "РИТГРАН"';
                break;
                
            case ('index'):
                $route = 'index';
                $subject = 'Детали обратной связи от компании "РИТГРАН"';
                break;
                
            default:
                $route = false;
                $subject = false;
                
        }
    
        //Yii::$app->mailer->htmlLayout = "@app/mail/layouts/main";
    
        return yii::$app->mailer->compose($route, ['user' => $user, 'product' => $product])
            ->setFrom($from_mail)
            ->setTo($user['email'])
            ->setSubject($subject)
            ->send();
    
    }

}