<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "person_task".
 *
 * @property int $id
 * @property int|null $person_id ผู้ยื่นขอ
 * @property int|null $reader_id ผู้ทรงคุณวุฒิ
 * @property int $checkup ผลเบื้องต้น
 * @property string $reader_fix_date วันที่ Readers ต้องส่งผล
 * @property string $reader_result_date วันที่ Readers ส่งผลกลับ
 * @property string|null $guidelines_date วันที่เข้า ก.พ.ว.
 */
class PersonTask extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'person_task';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['person_id', 'reader_id', 'checkup'], 'integer'],
            [['checkup', 'reader_fix_date', 'reader_result_date'], 'required'],
            [['reader_fix_date', 'reader_result_date', 'guidelines_date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'person_id' => 'ผู้ยื่นขอ',
            'reader_id' => 'ผู้ทรงคุณวุฒิ',
            'checkup' => 'ผลเบื้องต้น',
            'reader_fix_date' => 'วันที่ Readers ต้องส่งผล',
            'reader_result_date' => 'วันที่ Readers ส่งผลกลับ',
            'guidelines_date' => 'วันที่เข้า ก.พ.ว.',
        ];
    }


    public function getReader()
    {
        return $this->hasOne(Reader::class, ['id' => 'reader_id']);
    }
}
