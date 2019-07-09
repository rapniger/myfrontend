<?php

namespace frontend\controllers;


use Yii;
use yii\web\Controller;
use yii\web\request;
use yii\web\response;
use yii\web\Session;
use yii\web\Cookie;
use yii\web\BadRequestHttpException;
use yii\web\User;
use yii\web\IdentityInterface;

use yii\base\Action;
use yii\base\BaseObject;
use yii\base\InvalidParamException;
use yii\base\Security;//ХЭШ ПАРОЛЯ

use yii\filters\VerbFilter;
use yii\filters\AccessControl;

use common\models\LoginForm;

use yii\widgets\Pjax;
use yii\widgets\ActiveForm; 

use frontend\models\user\AccountUser; //Валидация аккаунта форма
use frontend\models\user\SigninUser; //Валидация регистрационная форма
use frontend\models\user\LoginUser; //Валидация авторизационная форма

use frontend\models\contact\Contact;//Валидация обратной связи

use frontend\models\comment\Comment;//Валидация отзыва

use frontend\models\catalog\Constructor;//Валидация конструктора

use frontend\models\service\Service;//Валидация услуг

class AjaxController extends Controller{
	
	public function behaviors(){
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['signin', 'signout', 'authorize'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['signin', 'authorize'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['signout'],
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
	
	//Регистрация
	public function actionSignin(){
		
		$model = new SigninUser();
		
		if(Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())){
			
			if($model->validate() == false){
							
				Yii::$app->response->format = 'json';

				return ActiveForm::validate($model);
							
			}else if($model->validate() == true){
				
				if(Yii::$app->request->post('reg-button')){
							
					if($model->login() == true){
						
						/*ОТПРАВКА ПИСЬМА ОБЯЗАТЕЛЬНО*/
								
						return $this->redirect('/account/signok');
								
					}else if($model->login() == false){
								
						return $this->redirect('/account/signerror');
								
					}
					
				}
							
			}
						
		}
		
	}
	//Авторизация
	public function actionAuthorize(){
		
		$model = new LoginUser();
		
		if(Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())){
			
			if($model->validate() == false){
				
				Yii::$app->response->format = 'json';

				return ActiveForm::validate($model);
				
			}else if($model->validate() == true){
			
				if(Yii::$app->request->post('auth_button')){
				
					if($model->authorize() == true){
						
						if(!\Yii::$app->user->isGuest){
							
							return $this->redirect('/page/index');
							
						}else if(\Yii::$app->user->isGuest){
					
							return $this->redirect('/page/index');
							
						}
								
					}else if($model->authorize() == false){
					
						//print_r("asdasd");
					
					}
				
				}
				
			}
			
		}
		
	}
	//Сохранение аккаунта записи
	public function actionAccount(){
		
		$model = new AccountUser();
		
		if(Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())){
			
			if($model->validate() == false){
				
				Yii::$app->response->format = 'json';
				//ЕСЛИ ПОЛЬЗОВАТЕЛЬ НАЖАЛ НА ОТМЕНУ
				if(Yii::$app->request->post('cancel-button')){
					
					$this->redirect('/page/index');
					
				}

				return ActiveForm::validate($model);
				
			}else if($model->validate() == true){
				
				if(Yii::$app->request->post('save-button')){
					
					if($model->account() == true){
						
						
						
					}else if($model->account() == false){
						
						
						
					}
					
				}
			
			}
			
		}
		
	}
	
	//Выход из системы
	public function actionSignout(){
		
		$model = new UserData();
		
		$model->logout();
		
	}
	
	//Обратная связь
	public function actionContact(){
		
		$contact = new Contact();
		
		if(Yii::$app->request->isAjax && $contact->load(Yii::$app->request->post())){
			
			if($contact->validate() == false){
				
				Yii::$app->response->format = Response::FORMAT_JSON;

				return ActiveForm::validate($contact);
				
			}else if($contact->validate() == true){
				
				if(Yii::$app->request->post('contact-button')){
					
					if($contact->saveContact() == true){
						
						return $this->redirect('/page/message-ok');
						
					}else if($contact->saveContact() == false){
						
						var_dump($contact);
						
					}
					
				}
			
			}
			
		}
		
	}
	
	public function actionComment(){
		
		$comment = new Comment();
		
		if(Yii::$app->request->isAjax && $comment->load(Yii::$app->request->post())){
			
			if($comment->validate() == false){
				
				Yii::$app->response->format = Response::FORMAT_JSON;

				return ActiveForm::validate($comment);
				
			}else if($comment->validate() == true){
				
				if(Yii::$app->request->post('comment-button')){
					
					if($comment->saveComment() == true){
						
						return $this->redirect('/page/comments');
						
					}else if($comment->saveComment() == false){
						
						var_dump($comment);
						
					}
					
				}
				
			}
			
		}
		
	}
	
	
	public function actionConstructor(){
		
		$model = new Constructor();
		
		//var_dump($model);
		
		//return $model->getStone;
		
		//var_dump($model->Stone());
		
	}
	
	//
	public function actionCart(){
		
		$cart = new Service();
		
		if(Yii::$app->request->isAjax && $cart->load(Yii::$app->request->post())){
			
			$data = Yii::$app->request->post();
					
			$session = Yii::$app->session;
		
			if ($session->isActive){
				
				$session['cart'] = [
					'type' => $data->type,
					'category' => $data->category,
				];
				
				
				
			}
			
		}
		
	}

}



/*

ткрытие и закрытие сессий
Простой код, иллюстрирующий работу с сессиями.

$session = Yii::$app->session;

// проверяем наличие открытой сессии
if ($session->isActive) ...

// открываем сессию
$session->open();

// закрываем сессию
$session->close();

// уничтожаем все данные сессии
$session->destroy();
1
2
3
4
5
6
7
8
9
10
11
12
13
$session = Yii::$app->session;
 
// проверяем наличие открытой сессии
if ($session->isActive) ...
 
// открываем сессию
$session->open();
 
// закрываем сессию
$session->close();
 
// уничтожаем все данные сессии
$session->destroy();

Многократный вызов методов open() и close() не приводит к ошибкам, так как, эти методы включают внутреннюю проверку на наличие открытой сессии.

Сохранение данных в сессии
$session = Yii::$app->session;
// первый вариант
$session->set('language', 'ru');
// второй вариант
$session['language'] = 'ru';
// третий вариант
$_SESSION['language'] = 'ru';

$session = Yii::$app->session;
// первый вариант
$session->set('language', 'ru');
// второй вариант
$session['language'] = 'ru';
// третий вариант
$_SESSION['language'] = 'ru';
Получение данных из сессии
$session = Yii::$app->session;
// первый вариант
$language = $session->get('language');
// второй вариант
$language = $session['language'];
// третий вариант
$language = isset($_SESSION['language']) ? $_SESSION['language'] : null;

$session = Yii::$app->session;
// первый вариант
$language = $session->get('language');
// второй вариант
$language = $session['language'];
// третий вариант
$language = isset($_SESSION['language']) ? $_SESSION['language'] : null;
Удаление значения из сессии
$session = Yii::$app->session;
// первый вариант
$session->remove('language');
// второй вариант
unset($session['language']);
// третий вариант
unset($_SESSION['language']);

$session = Yii::$app->session;
// первый вариант
$session->remove('language');
// второй вариант
unset($session['language']);
// третий вариант
unset($_SESSION['language']);
Проверка наличия данных в сессии
// первый вариант
if ($session->has('language')) ...
// второй вариант
if (isset($session['language'])) ...
// третий вариант
if (isset($_SESSION['language'])) ...

// первый вариант
if ($session->has('language')) ...
// второй вариант
if (isset($session['language'])) ...
// третий вариант
if (isset($_SESSION['language'])) ...
Получение всех данных сессии
// первый вариант
foreach ($session as $session_name => $session_value)
    echo $session_name.' - '.$session_value;
// второй вариант
foreach ($_SESSION as $session_name => $session_value)
    echo $session_name.' - '.$session_value;

// первый вариант
foreach ($session as $session_name => $session_value)
    echo $session_name.' - '.$session_value;
// второй вариант
foreach ($_SESSION as $session_name => $session_value)
    echo $session_name.' - '.$session_value;
Массивы в сессии
$session = Yii::$app->session;
// первый вариант
$session['user'] = [
    'id' => 1,
    'username' => 'superuser',
];
// второй вариант
$session['user.id'] = 1;
$session['user.username'] = 'superuser';
// не работоспособный вариант
$session['user']['id'] = 1;
$session['user']['username'] = 'superuser';
// обращение к данным массива
echo $session['user']['id'];
echo $session['user']['username'];

$session = Yii::$app->session;
// первый вариант
$session['user'] = [
    'id' => 1,
    'username' => 'superuser',
];
// второй вариант
$session['user.id'] = 1;
$session['user.username'] = 'superuser';
// не работоспособный вариант
$session['user']['id'] = 1;
$session['user']['username'] = 'superuser';
// обращение к данным массива
echo $session['user']['id'];
echo $session['user']['username'];
Flash сообщения с использованием сессий
Данный метод позволяет однократно отобразить flash сообщение и удалить данные о нем.

$session = Yii::$app->session;
// устанавливаем значение flash сообщения
$session->setFlash('userinsert', 'Регистрация прошла успешно!');
// проверяем наличие сообщения
$result = $session->hasFlash('userinsert');
// получаем и отображаем сообщение
echo $session->getFlash('userinsert');

$session = Yii::$app->session;
// устанавливаем значение flash сообщения
$session->setFlash('userinsert', 'Регистрация прошла успешно!');
// проверяем наличие сообщения
$result = $session->hasFlash('userinsert');
// получаем и отображаем сообщение
echo $session->getFlash('userinsert');
 
 */