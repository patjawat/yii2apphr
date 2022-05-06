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
 * @property int $step_id สถานะ
 * @property string $meetting_date ผ่านที่ประชุมวันที่
 * @property string|null $guidelines_date วันที่เข้า ก.พ.ว.
 * @property string|null $note หมาเหตุ...
 */
class Person extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    
    public static function getDb() {
        return Yii::$app->get('tcds');
    }

    public static function tableName()
    {
        return 'person';
    }
    public $q;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prefix', 'organization', 'req_position', 'study', 'step_id'], 'integer'],
            [['fname', 'lname', 'organization', 'req_position', 'author', 'step_id', 'meetting_date'], 'required'],
            [['meetting_date', 'guidelines_date','q'], 'safe'],
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

      public function ProgressPerson() {
        switch ($this->step_id) {
            case 1:
              return 1;
              break;
            case 2:
              return 24;
              break;
            case 3:
              return 36;
              break;
            case 4:
                return 48;
                break;
            case 5:
                return 60;
                break;
            case 6:
                return 72;
                break; 
            case 7:
                return 84;
                break;
            case 8:
                return 100;
                break; 
            default:
             return 0;
          }
      }
}
