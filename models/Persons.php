<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "persons".
 *
 * @property int $id
 * @property string $fname ชื่อ
 * @property string $lname สกุล
 * @property int $organization คณะ
 * @property int $position ตำแหน่ง
 * @property int|null $study สาขาวิชา
 */
class Persons extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function gerDb()
    {
        return Yii::@app->get('db_hr');
    }
    public static function tableName()
    {
        return 'persons';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fname', 'lname', 'organization', 'position'], 'required'],
            [['organization', 'position', 'study'], 'integer'],
            [['fname', 'lname'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fname' => 'ชื่อ',
            'lname' => 'สกุล',
            'organization' => 'คณะ',
            'position' => 'ตำแหน่ง',
            'study' => 'สาขาวิชา',
        ];
    }
}
