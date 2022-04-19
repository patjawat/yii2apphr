<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "task".
 *
 * @property int $id
 * @property int $step_id
 * @property int $status
 * @property int|null $person_id
 * @property string|null $note
 * @property string|null $director
 * @property string|null $basic
 * @property int|null $author
 * @property string|null $visit_date
 * @property string|null $meetting_date
 * @property string|null $reader_result
 * @property string|null $set_result_date
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
            [['step_id', 'status'], 'required'],
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
            'step_id' => 'Step ID',
            'status' => 'Status',
            'person_id' => 'Person ID',
            'note' => 'Note',
            'director' => 'Director',
            'basic' => 'Basic',
            'author' => 'Author',
            'visit_date' => 'Visit Date',
            'meetting_date' => 'Meetting Date',
            'reader_result' => 'Reader Result',
            'set_result_date' => 'Set Result Date',
        ];
    }
}
