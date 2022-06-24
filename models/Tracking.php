<?php

namespace app\models;

use Yii;
use yii\helpers\Json;
use yii\db\Expression;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
/**
 * This is the model class for table "tracking".
 *
 * @property int $id
 * @property string|null $ref
 * @property int|null $person_id ผู้ยื่นขอ
 * @property int|null $status_id สถานะการขอยื่น
 * @property string|null $approve วันที่สภาอนุมัติ
 * @property string|null $approve_result_date โปรดเกล้าแต่งตั้งให้ดำรงต่ำแหน่ง
 * @property string|null $tracking วันที่ต้องติดตามผล
 * @property string|null $data_json
 * @property string|null $updated_at
 * @property string $created_at
 * @property int|null $created_by ผู้สร้าง
 * @property int|null $updated_by ผู้แก้ไข
 */
class Tracking extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tracking';
    }

    public function behaviors()
    {
        return [
            [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by',
            ],
            [
              'class' => TimestampBehavior::className(),
              'createdAtAttribute' => 'created_at',
              'updatedAtAttribute' => 'updated_at',
              'value' => new Expression('NOW()'),
          ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['person_id', 'status_id', 'created_by', 'updated_by'], 'integer'],
            [['approve', 'approve_result_date', 'tracking', 'updated_at', 'created_at'], 'safe'],
            [['data_json'], 'string'],
            [['ref'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ref' => 'Ref',
            'person_id' => 'ผู้ยื่นขอ',
            'status_id' => 'สถานะการขอยื่น',
            'approve' => 'วันที่สภาอนุมัติ',
            'approve_result_date' => 'โปรดเกล้าแต่งตั้งให้ดำรงต่ำแหน่ง',
            'tracking' => 'วันที่ต้องติดตามผล',
            'data_json' => 'Data Json',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
            'created_by' => 'ผู้สร้าง',
            'updated_by' => 'ผู้แก้ไข',
        ];
    }

    public function afterFind() {
        $this->data_json = Json::decode($this->data_json, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        return parent::afterFind();
    }

    public function beforeSave($insert) {
        if (parent::beforeSave($insert)) {
            $this->data_json = Json::encode($this->data_json, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
            return true;
        } else {
            return false;
        }
    }

    public function getPerson() {
        return $this->hasOne(Person::className(), ['id' => 'person_id']);
    }

}
