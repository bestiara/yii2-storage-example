<?php

use yii\db\Migration;

/**
 * Class m220907_102609_add_admin_user
 */
class m220907_102609_add_admin_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220907_102609_add_admin_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220907_102609_add_admin_user cannot be reverted.\n";

        return false;
    }
    */
}
