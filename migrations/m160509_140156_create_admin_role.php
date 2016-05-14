<?php

use yii\db\Migration;

class m160509_140156_create_admin_role extends Migration
{
    public function safeUp()
    {
        $authManager = Yii::$app->getAuthManager();

        $adminRole = $authManager->createRole('admin');
        $adminRole->description = 'Admin role';
        $authManager->add($adminRole);
    }

    public function safeDown()
    {
        $authManager = Yii::$app->getAuthManager();

        $adminRole = $authManager->getRole('admin');
        $authManager->remove($adminRole);
    }

}
