<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%person}}`.
 */
class m220421_050225_create_person_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%person}}', [
            'id' => $this->primaryKey(),
            'prefix' => $this->integer()->comment('คำนำหน้า'),
            'fname' => $this->string()->notNull()->comment('ชื่อ'),
            'lname' => $this->string()->notNull()->comment('สกุล'),
            'organization' => $this->integer()->notNull()->comment('คณะ'),
            'req_position' => $this->integer()->notNull()->comment('ตำแหน่ง'),
            'study' => $this->integer()->comment('สาขาวิชา'),
            'note' => $this->text()->comment('หมาเหตุ...'),
            'author' => $this->integer()->comment('ผู้รับผิดชอบ'),
            'data_json' => $this->json()->null(),
            'updated_at' => $this->timestamp()->defaultValue(null)->append('ON UPDATE CURRENT_TIMESTAMP'),
            'created_at' => $this->timestamp(),   
            'created_by' => $this->integer()->comment('ผู้สร้าง'),
            'updated_by' => $this->integer()->comment('ผู้แก้ไข')

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%person}}');
    }
}
