<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tasks".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property int|null $ticket_id
 * @property int $owner_id
 * @property int|null $executor_id
 * @property string|null $deadline_at
 * @property string|null $started_at
 * @property string|null $completed_at
 * @property string $created_at
 * @property string|null $updated_at
 * @property int $status
 *
 * @property TasksWorkflow[] $tasksWorkflows
 */
class Tasks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tasks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['ticket_id', 'owner_id', 'executor_id', 'status'], 'integer'],
            [['owner_id'], 'required'],
            [['deadline_at', 'started_at', 'completed_at', 'created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'ticket_id' => 'Ticket ID',
            'owner_id' => 'Owner ID',
            'executor_id' => 'Executor ID',
            'deadline_at' => 'Deadline At',
            'started_at' => 'Started At',
            'completed_at' => 'Completed At',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[TasksWorkflows]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTasksWorkflows()
    {
        return $this->hasMany(TasksWorkflow::className(), ['task_id' => 'id']);
    }
}
