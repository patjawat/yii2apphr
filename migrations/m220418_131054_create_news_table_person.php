<?php

use yii\db\Migration;

/**
 * Class m220418_131054_create_news_table_person
 */
class m220418_131054_create_news_table_person extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('persons', [
            'id' => $this->primaryKey(),
            'fname' => $this->string()->notNull()->comment('ชื่อ'),
            'lname' => $this->string()->notNull()->comment('สกุล'),
            'organization' => $this->integer()->notNull()->comment('คณะ'),
            'position' => $this->integer()->notNull()->comment('ตำแหน่ง'),
            'study' => $this->integer()->comment('สาขาวิชา'),
            // 'meet_income' => $this->date()->notNull()->comment('วันที่เข้าที่ประชุม ก.พ.ว.'),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220418_131054_create_news_table_person cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220418_131054_create_news_table_person cannot be reverted.\n";

        return false;
    }
    */
}
