<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%prefix}}`.
 */
class m220421_075257_create_prefix_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%prefix}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->comment('คำนำหน้า'),
        ]);
        $this->insert('prefix',['name'=> 'นาย']);
        $this->insert('prefix',['name'=> 'นาง']);
        $this->insert('prefix',['name'=> 'นางสาว']);
        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%prefix}}');
    }
}
