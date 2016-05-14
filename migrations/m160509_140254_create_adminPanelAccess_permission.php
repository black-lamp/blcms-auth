<?php

use yii\db\Migration;

class m160509_140254_create_adminPanelAccess_permission extends Migration
{
    public function safeUp()
    {
        $authManager = Yii::$app->getAuthManager();

        if(!$adminRole = $authManager->getRole('admin')) {
            return false;
        }

        $permission = $authManager->createPermission('adminPanelAccess');
        $permission->description = 'Allows access to the admin panel';
        $authManager->add($permission);

        $authManager->addChild($adminRole, $permission);

    }

    public function safeDown()
    {
        $authManager = Yii::$app->getAuthManager();

        if(!$adminRole = $authManager->getRole('admin')) {
            return false;
        }

        $permission = $authManager->getPermission('adminPanelAccess');

        $authManager->removeChild($adminRole, $permission);
        $authManager->remove($permission);
    }

}
