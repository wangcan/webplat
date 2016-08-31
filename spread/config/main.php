<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-spread',
    'basePath' => dirname(__DIR__),
	//'viewPath' => '@spread/views',
	'layout' => null,
    'bootstrap' => ['log'],
    'controllerNamespace' => 'spread\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
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
            'errorAction' => 'site/error',
        ],
		'urlManager' => [
            'rules' => [
                'detail-<id:\d+>' => '/decoration/detail/index',
				'bm-<view:\w+>-<id:\d+>' => 'decoration/detail/feature',
				'jzhd-<type:\w+>-<city:\w+>' => '/decoration/detail/spread',
				//'<view:(price|design|measure)>-<type:\w+>-<city:\w+>' => 'decoration/detail/inner',
				'<city:\w+>-<view:(baojia|sheji|liangfang>' => 'decoration/detail/inner',
				'hd-<id:\d+>' => 'shoot/detail/index',
				'submit' => 'shoot/signup/submit',
				'jz-signup' => '/decoration/signup/index',
				'jz-signup-tview' => '/decoration/signup/tview',
				'jz-signup-cms' => '/decoration/signup/cms',
				'stat' => '/site/stat',
		        //'/jz-<controller:\w+>/<action:\w+>' => '/decoration/<controller>/<action>',
			],
		],
    ],

	'modules' => [
		'decoration' => [
			'class' => 'spread\decoration\Module',
		],
		'shoot' => [
			'class' => 'spread\shoot\Module',
		]
	],
    'params' => $params,
];
