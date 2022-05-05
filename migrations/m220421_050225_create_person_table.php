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
            'author' => $this->string()->notNull()->comment('ผู้รับผิดชอบ'),
            'step_id' => $this->integer()->notNull()->comment('สถานะ'),
            'meetting_date' => $this->date()->notNull()->comment('ผ่านที่ประชุมวันที่'),
            'guidelines_date' => $this->date()->comment('วันที่เข้า ก.พ.ว.'),
            'note' => $this->text()->comment('หมาเหตุ...'),

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
