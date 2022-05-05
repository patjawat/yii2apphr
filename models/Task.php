<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "task".
 *
 * @property int $id
 * @property int $step_id กระบวนการ
 * @property int|null $status สถานะ
 * @property int|null $person_id ชื่อ-ผู้ขอ
 * @property string|null $note หมายเหตุ
 * @property string|null $director
 * @property string|null $basic เบื้องต้น ผ่าน ไม่ผ่าน
 * @property int|null $author ผู้รับผิดชอบ
 * @property string|null $visit_date ผ่านที่ประชุมคณะฯ
 * @property string|null $meetting_date
 * @property string|null $reader_result reader ส่งผลกลับ
 * @property string|null $set_result_date Readers ต้องส่งผล
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'task';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['step_id'], 'required'],
            [['step_id', 'status', 'person_id', 'author'], 'integer'],
            [['note', 'basic'], 'string'],
            [['visit_date', 'meetting_date', 'reader_result', 'set_result_date'], 'safe'],
            [['director'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'step_id' => 'กระบวนการ',
            'status' => 'สถานะ',
            'person_id' => 'ชื่อ-ผู้ขอ',
            'note' => 'หมายเหตุ',
            'director' => 'Director',
            'basic' => 'เบื้องต้น ผ่าน ไม่ผ่าน',
            'author' => 'ผู้รับผิดชอบ',
            'visit_date' => 'ผ่านที่ประชุมคณะฯ',
            'meetting_date' => 'Meetting Date',
            'reader_result' => 'reader ส่งผลกลับ',
            'set_result_date' => 'Readers ต้องส่งผล',
        ];
    }
}
