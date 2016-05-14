<?php
/* @var $this \yii\web\View */
/* @var $loginFormModel \bl\cms\auth\models\forms\LoginForm */

use yii\bootstrap\BootstrapPluginAsset;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

BootstrapPluginAsset::register($this);
?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html>

    <head>
        <?= Html::csrfMetaTags() ?>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>

    <body>
    <?php $this->beginBody() ?>

    <style>
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #eee;
        }

        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin .checkbox {
            font-weight: normal;
        }
        .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
        }
        .form-signin .form-control:focus {
            z-index: 2;
        }
        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>

    <div class="container">
            <? $loginForm = ActiveForm::begin([
                'options' => [
                    'class' => 'form-signin'
                ]
            ]) ?>
            <div class="form-group">
                <?=
                $loginForm->field($loginFormModel, 'username', [
                    'inputOptions' => [
                        'placeholder' => "Имя пользователя",
                        'class' => 'form-control'
                    ]
                ])->label(false)
                ?>
            </div>
            <div class="form-group">
                <?=
                $loginForm->field($loginFormModel, 'password', [
                    'inputOptions' => [
                        'type' => 'password',
                        'placeholder' => "Пароль",
                        'class' => 'form-control'
                    ]
                ])->label(false)
                ?>
            </div>
            <?= Html::activeCheckbox($loginFormModel, 'rememberMe') ?>
            <button type="submit" class="btn btn-primary block full-width m-b">Войти</button>
            <? ActiveForm::end() ?>
    </div> <!-- /container -->

    <?php $this->endBody() ?>
    </body>

    </html>
<?php $this->endPage() ?>