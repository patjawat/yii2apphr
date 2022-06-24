<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tracking}}`.
 */
class m220623_145005_create_tracking_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tracking}}', [
            'id' => $this->primaryKey(),
            'ref' => $this->string(),
            'person_id' => $this->integer()->comment('ผู้ยื่นขอ'),
            'status_id' => $this->boolean()->comment('สถานะการขอยื่น'),
            'approve' => $this->date()->comment('วันที่สภาอนุมัติ'),
            'approve_result_date' => $this->date()->comment('โปรดเกล้าแต่งตั้งให้ดำรงต่ำแหน่ง'),
            'tracking' => $this->date()->comment('วันที่ต้องติดตามผล'),
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
        $this->dropTable('{{%tracking}}');
    }
}
