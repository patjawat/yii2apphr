<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "person".
 *
 * @property int $id
 * @property int|null $prefix คำนำหน้า
 * @property string $fname ชื่อ
 * @property string $lname สกุล
 * @property int $organization คณะ
 * @property int $req_position ตำแหน่ง
 * @property int|null $study สาขาวิชา
 * @property string $author ผู้รับผิดชอบ
 * @property int $step สถานะ
 * @property string $meetting_date ผ่านที่ประชุมวันที่
 * @property string|null $guidelines_date วันที่เข้า ก.พ.ว.
 * @property string|null $note หมาเหตุ...
 */
class Person extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'person';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prefix', 'organization', 'req_position', 'study', 'step_id'], 'integer'],
            [['fname', 'lname', 'organization', 'req_position', 'author', 'step_id', 'meetting_date'], 'required'],
            [['meetting_date', 'guidelines_date'], 'safe'],
            [['note'], 'string'],
            [['fname', 'lname', 'author'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'prefix' => 'คำนำหน้า',
            'fname' => 'ชื่อ',
            'lname' => 'สกุล',
            'organization' => 'คณะ',
            'req_position' => 'ตำแหน่ง',
            'study' => 'สาขาวิชา',
            'author' => 'ผู้รับผิดชอบ',
            'step_id' => 'สถานะ',
            'meetting_date' => 'ผ่านที่ประชุมวันที่',
            'guidelines_date' => 'วันที่เข้า ก.พ.ว.',
            'note' => 'หมาเหตุ...',
        ];
    }

    public function getReaders() {
       return PersonTask::find()->where(['person_id' => $this->id])->all();
    }

    public function getStep() {
        return $this->hasOne(Step::class, ['id' => 'step_id']);
     }
}
