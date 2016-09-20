<?php
return [
    'modules' => [
        'user' => [
            'class' => 'dektrium\user\Module',
            'modelMap' => [
                'User' => 'dektrium\user\models\User',
            ],
            'as frontend' => 'dektrium\user\filters\FrontendFilter',
        ],
    ],
    'components' => [
//        'authClientCollection' => [
//            'class' => 'yii\authclient\Collection',
//            'clients' => [
//                'google' => [
//                    'class' => 'yii\authclient\clients\Google',
//                    'clientId' => 'google_client_id',
//                    'clientSecret' => 'google_client_secret',
//                ],
//                'facebook' => [
//                    'class' => 'yii\authclient\clients\Facebook',
//                    'clientId' => 'facebook_client_id',
//                    'clientSecret' => 'facebook_client_secret',
//                ],
//                'vkontakte' => [
//                    'class' => 'yii\authclient\clients\VKontakte',
//                    'clientId' => 'vkontakte_client_id',
//                    'clientSecret' => 'vkontakte_client_secret',
//                ]
//            ],
//        ],

        'user' => [
            'identityClass' => 'dektrium\user\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => [
                'name'     => '_frontendIdentity',
                'path'     => '/',
                'httpOnly' => true,
            ],
        ],
        'session' => [
            'name' => 'FRONTENDSESSID',
            'cookieParams' => [
                'httpOnly' => true,
                'path'     => '/',
            ],
        ],
    ],
];
