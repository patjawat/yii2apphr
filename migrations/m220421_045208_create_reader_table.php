<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%reader}}`.
 */
class m220421_045208_create_reader_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%reader}}', [
            'id' => $this->primaryKey(),
            'prefix' => $this->integer()->comment('คำนำหน้า'),
            'fullname' => $this->string()->notNull()->comment('ชื่อ reader')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%reader}}');
    }
}
