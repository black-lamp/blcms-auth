<?php
namespace bl\cms\auth\controllers;

use bl\cms\auth\models\forms\LoginForm;
use Yii;
use yii\web\Controller;

/**
 * @author Gutsulyak Vadim <guts.vadim@gmail.com>
 */
class AuthController extends Controller
{
    public $defaultAction = 'login';

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $loginFormModel = new LoginForm();

        if(Yii::$app->request->isPost) {
            $loginFormModel->load(Yii::$app->request->post());
            if ($loginFormModel->login()) {
                return $this->goBack();
            }
        }

        return $this->renderPartial('login', [
            'loginFormModel' => $loginFormModel,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect([Yii::$app->user->loginUrl]);
    }
}