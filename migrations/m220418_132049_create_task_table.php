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
            'step_id' => $this->integer()->notNull()->comment('กระบวนการ'),
            'status' => $this->integer()->comment('สถานะ'),
            'person_id' => $this->integer()->comment('ชื่อ-ผู้ขอ'),
            'note' => $this->text()->comment('หมายเหตุ'),
            'director' => $this->string()->comment(''),
            'basic' => $this->text()->comment('เบื้องต้น ผ่าน ไม่ผ่าน'),
            'author' => $this->integer()->comment('ผู้รับผิดชอบ'),
            'visit_date' => $this->date()->comment('ผ่านที่ประชุมคณะฯ'),
            'meetting_date' => $this->date()->comment(''),
            'reader_result' => $this->date()->comment('reader ส่งผลกลับ'),
            'set_result_date' => $this->date()->comment('Readers ต้องส่งผล'),
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
