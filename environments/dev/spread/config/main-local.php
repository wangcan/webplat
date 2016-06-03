<?php

$config = [
    'components' => [
        'request' => [
            'cookieValidationKey' => 'NY_ZNyJVIjF66iaCUb-uWDnl0N74Jp3K',
        ],
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;