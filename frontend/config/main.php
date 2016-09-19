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
        'user' => [
            'identityCookie' => [
                'name'     => '_frontendIdentity',
                'path'     => '/',
                'httpOnly' => true,
            ],
        ],
    ],
];
