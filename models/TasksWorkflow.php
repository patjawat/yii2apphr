<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tasks_workflow".
 *
 * @property int $id
 * @property int $task_id
 * @property int $owner_id
 * @property int $assigned_id
 * @property string|null $description
 * @property string|null $deadline_at
 * @property string|null $started_at
 * @property string|null $completed_at
 * @property string $created_at
 * @property string|null $updated_at
 * @property int $status
 *
 * @property Tasks $task
 */
class TasksWorkflow extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tasks_workflow';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['task_id', 'owner_id', 'assigned_id'], 'required'],
            [['task_id', 'owner_id', 'assigned_id', 'status'], 'integer'],
            [['description'], 'string'],
            [['deadline_at', 'started_at', 'completed_at', 'created_at', 'updated_at'], 'safe'],
            [['task_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tasks::className(), 'targetAttribute' => ['task_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'task_id' => 'Task ID',
            'owner_id' => 'Owner ID',
            'assigned_id' => 'Assigned ID',
            'description' => 'Description',
            'deadline_at' => 'Deadline At',
            'started_at' => 'Started At',
            'completed_at' => 'Completed At',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Task]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTask()
    {
        return $this->hasOne(Tasks::className(), ['id' => 'task_id']);
    }
}
