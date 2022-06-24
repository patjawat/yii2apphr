<?php

namespace app\models;

use Yii;
use yii\db\Expression;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

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
 * @property string|null $note หมาเหตุ...
 * @property int|null $author ผู้รับผิดชอบ
 * @property string|null $phone โทรศัพท์
 * @property string|null $email Email
 * @property string|null $line Line
 * @property string|null $data_json
 * @property string|null $updated_at
 * @property string $created_at
 * @property int|null $created_by ผู้สร้าง
 * @property int|null $updated_by ผู้แก้ไข
 */
class Person extends \yii\db\ActiveRecord
{
    public $fullname;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'person';
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
            [['prefix', 'organization', 'req_position', 'study', 'author', 'created_by', 'updated_by'], 'integer'],
            [['fname', 'lname', 'organization', 'req_position'], 'required'],
            [['note', 'data_json'], 'string'],
            [['updated_at', 'created_at','status_id'], 'safe'],
            [['fname', 'lname', 'phone', 'email', 'line'], 'string', 'max' => 255],
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
            'note' => 'หมาเหตุ...',
            'author' => 'ผู้รับผิดชอบ',
            'phone' => 'โทรศัพท์',
            'email' => 'Email',
            'line' => 'Line',
            'status_id' => 'สถานะ',
            'data_json' => 'Data Json',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
            'created_by' => 'ผู้สร้าง',
            'updated_by' => 'ผู้แก้ไข',
        ];
    }


    public function getTracking() {
        return $this->hasMany(Tracking::className(), ['person_id' => 'id']);
    }

    public function getStatus() {
        return $this->hasOne(Category::className(), ['id' => 'status_id']);
    }


    public function getPrefixname() {
        return $this->hasOne(Prefix::className(), ['id' => 'prefix']);
    }
    public function getOrg() {
        return $this->hasOne(Category::className(), ['id' => 'organization']);
    }

    public function getPosition() {
        return $this->hasOne(Category::className(), ['id' => 'req_position']);
    }

    public function getStudyname() {
        return $this->hasOne(Category::className(), ['id' => 'study']);
    }

    public function Fullname(){
        return $this->prefixname->name.$this->fname.' '.$this->lname;
    }
}
