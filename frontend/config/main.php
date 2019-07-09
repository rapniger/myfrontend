<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
	'language' => 'ru-RU',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
	'defaultRoute' => 'index/index',
	//'defaultRoute' => 'map/index',
/*	'modules' => [
		'account' => [
			'class' => 'app\modules\account\module',
		],
	],
*/    'components' => [
		'assetManager' => [
			'bundles' => [
				'yii\bootstrap\BootstrapAsset' => [
					'css' => [],
				],
				'yii\bootstrap\BootstrapPluginAsset' => [
					'js'=>[]
				],
				'yii2mod\slider\IonSliderAsset' => [
                    'css' => [
                        'css/normalize.css',
                        'css/ion.rangeSlider.css',
                        'css/ion.rangeSlider.skinFlat.css'
                     ]
                ],
			],
		],
        'request' => [
            'csrfParam' => 'UserCode',
			'cookieValidationKey' => 'MmnUasddfgAAA22331',
			'parsers' => [
				//'application/json' => 'yii/web/JsonParser',
			],
        ],
        'user' => [
			//'identityClass' => 'frontend\models\map\User',
			'identityClass' => 'frontend\models\user\user',
			/*'enableSession' => false,*/
			//'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
			'loginUrl' => ['account/authorize'],
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'ritgran-cookie',
			'class' => '\yii\web\DbSession',
			'sessionTable' => 'session_data',
			'cookieParams' => ['lifetime' => 3600*24*30*12],
			'timeout' => 3600*24*30*12,
			'useCookies' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'index/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
		'formatter' => [
			'class' => 'yii\i18n\Formatter',
			'decimalSeparator' => '',
			'thousandSeparator' => '',
			'currencyCode' => 'EUR',
			'dateFormat' => 'php: d/m/Y',
			'datetimeFormat' => 'php: d/m/Y H:i',
		],
		'db' => require(__DIR__.'/db.php'),
		'reCaptcha' => [
			'name' => 'reCaptcha',
			'class' => 'himiklab\yii2\recaptcha\ReCaptcha',
			'siteKey' => '6LfTipkUAAAAAF8q0qARYxZeEFCmn2R7XQj-nYHJ',
			'secret' => '6LfTipkUAAAAAGMHF11zP_Axv5WHxwRW2N3NGmcE',
		],
		/*[
		'mailer' => [
		    'class' => 'yii\swiftmailer\Mailer',
		    'useFileTransport' => true,
			/*
			'transport' => [
				'class' => 'Swift_SmtpTransport',
				'host' => 'smtp.ukr.net',  // e.g. smtp.mandrillapp.com or smtp.gmail.com
				'username' => 'user@ukr.net',
				'password' => 'password',
				'port' => '2525', // Port 25 is a very common port too
				'encryption' => 'ssl', // It is often used, check your provider or mail server specs
    ],	
			
            ],
        ],*/
    ],
    'params' => $params,
];
