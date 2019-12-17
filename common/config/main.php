<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'modules'=> [
        'admin' => [
            'class' => 'mdm\admin\Module',
        ],
        'gii' => [
            'class' => 'yii\gii\Module',
        ]


        ],
    'components' => [
       
        'authManager' => [
            'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\DbManager'
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'mdm\admin\models\User',
            'loginUrl' => ['admin/user/login'],
        ]
    ],
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            'site/*',
            'admin/*',
            'gii/*',
            'email-groups/*',
            'titles/*',
            'settings/*',
            'countries/*',
            'mailing-list/*',
            'mail-desk/*',
            'email-templates/*',
            'group-mail/*'

            
        ]
    ]
];


