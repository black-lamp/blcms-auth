<?php

use bl\cms\auth\models\User;
use yii\db\Migration;

class m160509_140305_create_admin_user extends Migration
{
    public function safeUp()
    {
        $auth = Yii::$app->getAuthManager();

        if(!$adminRole = $auth->getRole('admin')) {
            return false;
        }

        $user = new User();
        $user->username = 'admin';
        $user->email = 'admin@host.test';
        $user->setPassword('black-lamp');
        $user->generateAuthKey();

        if ($user->save()) {
            $auth->assign($adminRole, $user->getId());
        }
    }

    public function safeDown()
    {
        $auth = Yii::$app->getAuthManager();

        if(!$adminRole = $auth->getRole('admin')) {
            return false;
        }

        if(!$adminUser = User::findByUsername('admin')) {
            return false;
        }

        $auth->revoke($adminRole, $adminUser);

        User::deleteAll([
            'id' => $adminUser->id
        ]);
    }

}
