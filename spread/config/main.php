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
	        'enablePrettyUrl' => true,
            'enableStrictParsing' => false,
            'showScriptName' => false,
            'rules' => [
				//Yii::getAlias('@grouponurl') => '/groupon',
				'detail/<id:\d+>' => 'groupon/detail/index',
                '<type:(677|377)>' => '/decoration/detail/index',
				'<city:\w+>' => 'groupon/detail/index',
		        ['pattern' => '/<controller:\w+>/<action:\w+>', 'route' => '/groupon/<controller>/<action>', 'host' => Yii::getAlias('@grouponurl')],
		        ['pattern' => '/<controller:\w+>/<action:\w+>', 'route' => '/groupon/<controller>/<action>', 'host' => Yii::getAlias('@syurl')],
			],
		],
    ],

	'modules' => [
		'groupon' => [
			'class' => 'spread\groupon\Module',
		],
		'decoration' => [
			'class' => 'spread\decoration\Module',
		],
	],
    'params' => $params,
];