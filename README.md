Auth Extension for Black-Lamp CMS
=====================================

INSTALLATION
------------

### Migrate

    yii migrate --migrationPath=@vendor/yiisoft/yii2/rbac/migrations
    yii migrate --migrationPath=@vendor/black-lamp/blcms-auth/migrations

### Configure user component

    'components' => [
        ...
        'user' => [
            'loginUrl' => ['/auth/login'],
            'identityClass' => 'bl\cms\auth\models\User',
            'enableAutoLogin' => true,
        ],
        ...
    ]

### Add module to your 'modules' config section

    'modules' => [
        ...
        'auth' => [
            'class' => 'bl\cms\auth\Module'
        ],
        ...
    ]