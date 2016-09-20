<?php
return [
    'modules' => [
        'user' => [
            'class' => 'dektrium\user\Module',
            'enableRegistration' => false,
            'admins' => ['admin'],
            'as backend' => [
                'class' => 'dektrium\user\filters\BackendFilter',
                'only' => ['register'], // Block View Register Backend
            ],
        ]
    ],
    'components' => [
        'user' => [
            'identityClass' => 'dektrium\user\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => [
                'name'     => '_backendIdentity',
                'path'     => '/admin',
                'httpOnly' => true,
            ],
        ],
        'session' => [
            'name' => 'BACKENDSESSID',
            'cookieParams' => [
                'httpOnly' => true,
                'path'     => '/admin',
            ],
        ],
    ],
];
