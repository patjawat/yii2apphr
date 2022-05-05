<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category_type}}`.
 */
class m220418_134516_create_category_type_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category_type}}', [
            'id' => $this->primaryKey(),
            'type_name' => $this->string()->notNull()->comment('ประเภท'),
            'title' => $this->string()->notNull()->comment('ชื่อ')
        ]);
        $this->insert('category_type',['type_name' => 'organization','title' => 'คณะ']);
        $this->insert('category_type',['type_name' => 'position','title' => 'ตำแหน่ง']);
        $this->insert('category_type',['type_name' => 'study','title' => 'สาขาวิชา']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%category_type}}');
    }
}
