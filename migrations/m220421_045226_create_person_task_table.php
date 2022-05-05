<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%person_task}}`.
 */
class m220421_045226_create_person_task_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%person_task}}', [
            'id' => $this->primaryKey(),
            'person_id' => $this->integer()->comment('ผู้ยื่นขอ'),
            'reader_id' => $this->integer()->comment('ผู้ทรงคุณวุฒิ'),
            'checkup' => $this->boolean()->notNull()->comment('ผลเบื้องต้น'),
            'reader_fix_date' => $this->date()->notNull()->comment('วันที่ Readers ต้องส่งผล'),
            'reader_result_date' => $this->date()->notNull()->comment('วันที่ Readers ส่งผลกลับ'),
            'guidelines_date' => $this->date()->comment('วันที่เข้า ก.พ.ว.'),


        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%person_task}}');
    }
}
