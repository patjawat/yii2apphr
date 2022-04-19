<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%step}}`.
 */
class m220418_132040_create_step_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%step}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->comment('ชื่อ'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%step}}');
    }
}
