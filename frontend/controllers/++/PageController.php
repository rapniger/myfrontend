<?php
namespace frontend\controllers;

use Yii;
use yii\web\request;
use yii\web\response;
use yii\web\Cookie;
use yii\web\Controller;
use yii\web\BadRequestHttpException;

use yii\filters\AccessControl; //КОНТРОЛЬ ДОСТУПА

use frontend\models\user\SigninUser;
use frontend\models\user\LoginUser;
use frontend\models\contact\Contact;
use frontend\models\catalog\Constructor;
use frontend\models\comment\Comment;
use frontend\models\service\Service;
use frontend\models\Page;
use kartik\date\DatePicker;
/**
 * Site controller
 */
class PageController extends Controller{
	
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
		$html = new Page();
		
		$html->title = 'Компания РИТГРАН';
		
		$this->view->title = $html->title;
		
		$countcart = 'Пусто';
		
		$authuser = new LoginUser();
		
		$contact = new Contact();
		
		$comment = new Comment();
		
		$comments = $comment->fourComment();
		
		return $this->render('index', compact('authuser', 'contact', 'comments', 'countcart'));
		
	}
	
	public function actionAbout(){
		
		/**/
		$html = new Page();
		
		$html->title = 'О компании РИТГРАН';
		
		$this->view->title = $html->title;
		
		/**/
		$authuser = new LoginUser();
		
		return $this->render('about', compact('authuser'));
		
	}
	
	public function actionServices(){
		
		/**/
		$html = new Page();
		
		$html->title = 'Наши услуги РИТГРАН';
		
		$this->view->title = $html->title;
		
		/**/
		$authuser = new LoginUser();
		
		
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
		
		return $this->render('services', compact('authuser', 'cart'));
		
	}
	
	public function actionContact(){
		
		/**/
		$html = new Page();
		
		$html->title = 'Контакты РИТГРАН';
		
		$this->view->title = $html->title;
		
		$contact = new Contact();
		
		return $this->render('contact', compact('contact'));
		
	}
	
	public function actionCatalog(){
		
		/**/
		$html = new Page();
		
		$html->title = 'Каталог';
		
		$this->view->title = $html->title;
		
		/**/
		$authuser = new LoginUser();
		
		return $this->render('catalog', compact('authuser'));
		
	}
	
	
	public function actionConstructor(){
		
		/**/
		$html = new Page();
		
		$html->title = 'Конструктор от РИТГРАН';
		
		$this->view->title = $html->title;
		
		/**/
		$constructor = new Constructor();
		
		$stone = $constructor->stone();
		
		$size = $constructor->size();
		
		return $this->render('constructor', compact('constructor', 'stone', 'size'));
		
	}

	
	public function actionCart(){
		
		/**/
		$html = new Page();
		
		$html->title = 'Корзина заказа';
		
		$this->view->title = $html->title;
		
		/**/
		$authuser = new AuthUser();
		
		return $this->render('cart', compact('authuser'));
		
	}
	
	
	public function actionComments(){
		
		/**/
		$html = new Page();
		
		$html->title = 'Отзывы о компании РИТГРАН';
		
		$this->view->title = $html->title;
		
		$comment = new Comment();
		
		$comments = $comment->tenComment();
		
		$pages = $comment->paginationComment();
		
		return $this->render('comments', compact('comment', 'comments', 'pages'));
		
	}
	
	
	public function actionSingleproduct(){
		
		/**/
		$html = new Page();
		
		$html->title = 'Просмотр товара РИТГРАН';
		
		$this->view->title = $html->title;
		
		/**/
		$authuser = new AuthUser();
		
		return $this->render('singleproduct', compact('authuser'));
		
	}
	
	
	public function actionMessageOk(){
		
		$html = new Page();
		
		$html->title = 'Сообщение доставлено!';
		
		$this->view->title = $html->title;
		
		return $this->render('messageok');
		
	}
	
}