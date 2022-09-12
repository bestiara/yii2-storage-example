<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%device}}`.
 */
class m220912_114131_create_device_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%device}}', [
            'id' => $this->primaryKey(),
            'serial' => $this->string()->notNull()->unique(),
            'store_id' => $this->integer()->null(),
            'created_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex(
            'idx-device-store_id',
            'device',
            'store_id'
        );

        $this->addForeignKey(
            'fk-device-store_id',
            'device',
            'store_id',
            'store',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-device-store_id',
            'device'
        );

        $this->dropIndex(
            'idx-device-store_id',
            'device'
        );

        $this->dropTable('{{%device}}');
    }
}
