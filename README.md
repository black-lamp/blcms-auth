Auth Extension for Black-Lamp CMS
=====================================

INSTALLATION
------------
In backend index.php file add to end of ArrayHelper::merge():
 ```php 
 $config = yii\helpers\ArrayHelper::merge(
     require(__DIR__ . '/../../vendor/black-lamp/blcms-auth/backend/config/main.php')
 );
 ```
 
 Also in frontend index.php file add to end of ArrayHelper::merge():
```php
$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../../vendor/black-lamp/blcms-auth/frontend/config/main.php')
);
```