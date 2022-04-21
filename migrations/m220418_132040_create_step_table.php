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

                
        $this->insert('step',['name' => 'ขั้นที่ 1 กองทรัพยากรบุคคลรับเรื่องจากคณะ/หน่วยงาน']);
        $this->insert('step',['name' => 'ขั้นที่ 2 นำเรื่องเสนอคณะกรรมการพิจารณาตำแหน่งทางวิชาการ เพื่อพิจารณารายละเอียดของผลงานทางวิชาการและรายชื่อผู้ทรงคุณวุฒิ']);
        $this->insert('step',['name' => 'ขั้นที่ 3 ติดต่อทาบทามคณะกรรมการผู้ทรงคุณวุฒิ เพื่อทำหน้าที่ประเมินผลงานทางวิชาการ']);
        $this->insert('step',['name' => 'ขั้นที่ 4 รอผลการทาบทามคณะกรรมการผู้ทรงคุณวุฒิทำหน้าที่ประเมินผลงานทางวิชาการ']);
        $this->insert('step',['name' => 'ขั้นที่ 5 ส่งผลงานให้ผู้ทรงคุณวุฒิประเมิน']);
        $this->insert('step',['name' => 'ขั้นที่ 6 ประชุมคณะกรรมการพิจารณาตำแหน่งทางวิชาการทุกวันพฤหัสบดีที่ 3 ของทุกเดือน']);
        $this->insert('step',['name' => 'ขั้นที่ 7 นำเรื่องเสนอที่ประชุมสภามหาวิทยาลัย']);
        $this->insert('step',['name' => 'ขั้นที่ 8 คำสั่งแต่งตั้งให้ดำรงตำแหน่งทางวิชาการ']);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%step}}');
    }
}
