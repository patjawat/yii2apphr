<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%task}}`.
 */
class m220418_132049_create_task_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%task}}', [
            'id' => $this->primaryKey(),
            'step_id' => $this->integer()->notNull(),
            'status' => $this->integer()->notNull(),
            'person_id' => $this->integer(),
            'note' => $this->text(),
            'director' => $this->string(),
            'basic' => $this->text(),
            'author' => $this->integer(),
            'visit_date' => $this->date(),
            'meetting_date' => $this->date(),
            'reader_result' => $this->date(),
            'set_result_date' => $this->date(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%task}}');
    }
}
