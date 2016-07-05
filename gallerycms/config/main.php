<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-gallerycms',
    'basePath' => dirname(__DIR__),
	'viewPath' => '@gallerycms/views/default',
	'layout' => null,
    'bootstrap' => ['log'],
    'controllerNamespace' => 'gallerycms\controllers',
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
				'/ts-<view:\w+>' => '/house/feature/index',
				Yii::getAlias('@gallerycmsurl') . '/' => '/house/site/index', 
				Yii::getAlias('@m.gallerycmsurl') . '/' => '/house/site/index', 
				Yii::getAlias('@gallerycmsurl') . '/<_q:.*>' => '/house/<_q>', 
				Yii::getAlias('@m.gallerycmsurl') . '/<_q:.*>' => '/house/<_q>', 
            ],
        ],
    ],
	'modules' => [
		'house' => [
			'class' => 'gallerycms\house\Module',
		],
	],
    'params' => $params,
];