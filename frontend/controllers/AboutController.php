<?php
namespace frontend\controllers;

use Yii;
use yii\web\request;
use yii\web\response;
use yii\web\Cookie;
use yii\web\Controller;
use yii\web\BadRequestHttpException;

use yii\filters\AccessControl; //КОНТРОЛЬ ДОСТУПА

use frontend\models\user\signinuser;
use frontend\models\user\loginuser;
use frontend\models\contact\contact;
use frontend\models\catalog\constructor;
use frontend\models\comment\comment;
use frontend\models\service\service;
use frontend\models\page;
use kartik\date\DatePicker;
/**
 * Site controller
 */
class AboutController extends Controller{
	
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signin'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['signin'],
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
	
	public function actions(){
		
		return [
			
			'error' => [
				
				'class' => 'yii\web\ErrorAction',
				
			],
			
			'captcha' => [
			
				'class' => 'yii\captcha\CaptchaAction',
				
				'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
				
			],
			
		];
		
	}
	
	public function actionIndex(){
		
		/**/
		$html = new page();
		
		$html->title = 'Компания РИТГРАН';
		
		$this->view->title = $html->title;
		
		$countcart = 'Пусто';
		
		$authuser = new loginuser();
		
		$contact = new contact();
		
		$comment = new comment();
		
		$comments = $comment->fourComment();
		
		return $this->render('index', compact('authuser', 'contact', 'comments', 'countcart'));
		
	}
	
	public function actionAbout(){
		
		/**/
		$html = new page();
		
		$html->title = 'О компании РИТГРАН';
		
		$this->view->title = $html->title;
		
		/**/
		$authuser = new loginuser();
		
		return $this->render('about', compact('authuser'));
		
	}
	
	public function actionServices(){
		
		/**/
		$html = new page();
		
		$html->title = 'Наши услуги РИТГРАН';
		
		$this->view->title = $html->title;
		
		/**/
		$authuser = new loginuser();
		
		
		$cart = new service();
		
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
		
		return $this->render('services', compact('authuser', 'cart'));
		
	}
	
	public function actionContact(){
		
		/**/
		$html = new page();
		
		$html->title = 'Контакты РИТГРАН';
		
		$this->view->title = $html->title;
		
		$contact = new contact();
		
		return $this->render('contact', compact('contact'));
		
	}
	
	public function actionCatalog(){
		
		/**/
		$html = new page();
		
		$html->title = 'Каталог';
		
		$this->view->title = $html->title;
		
		/**/
		$authuser = new loginuser();
		
		return $this->render('catalog', compact('authuser'));
		
	}
	
	
	public function actionConstructor(){
		
		/**/
		$html = new page();
		
		$html->title = 'Конструктор от РИТГРАН';
		
		$this->view->title = $html->title;
		
		/**/
		$constructor = new constructor();
		
		$stone = $constructor->stone();
		
		$size = $constructor->size();
		
		return $this->render('constructor', compact('constructor', 'stone', 'size'));
		
	}

	
	public function actionCart(){
		
		/**/
		$html = new page();
		
		$html->title = 'Корзина заказа';
		
		$this->view->title = $html->title;
		
		/**/
		$authuser = new authuser();
		
		return $this->render('cart', compact('authuser'));
		
	}
	
	
	public function actionComments(){
		
		/**/
		$html = new page();
		
		$html->title = 'Отзывы о компании РИТГРАН';
		
		$this->view->title = $html->title;
		
		$comment = new comment();
		
		$comments = $comment->tenComment();
		
		$pages = $comment->paginationComment();
		
		return $this->render('comments', compact('comment', 'comments', 'pages'));
		
	}
	
	
	public function actionSingleproduct(){
		
		/**/
		$html = new page();
		
		$html->title = 'Просмотр товара РИТГРАН';
		
		$this->view->title = $html->title;
		
		/**/
		$authuser = new authuser();
		
		return $this->render('singleproduct', compact('authuser'));
		
	}
	
	
	public function actionMessageOk(){
		
		$html = new page();
		
		$html->title = 'Сообщение доставлено!';
		
		$this->view->title = $html->title;
		
		return $this->render('messageok');
		
	}
	
}