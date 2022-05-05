<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prefix".
 *
 * @property int $id
 * @property string $name คำนำหน้า
 */
class Prefix extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prefix';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'คำนำหน้า',
        ];
    }
}
