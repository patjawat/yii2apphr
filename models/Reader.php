<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reader".
 *
 * @property int $id
 * @property int|null $prefix คำนำหน้า
 * @property string $fullname ชื่อ reader
 */
class Reader extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reader';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prefix'], 'integer'],
            [['fullname'], 'required'],
            [['fullname'], 'string', 'max' => 255],
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
            'fullname' => 'ชื่อ reader',
        ];
    }
}
