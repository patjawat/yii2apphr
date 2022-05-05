<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tasks_subunits".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property int $owner_id
 * @property string|null $users_id
 * @property string $created_at
 * @property string|null $updated_at
 * @property int $status
 */
class TasksSubunits extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tasks_subunits';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description', 'users_id'], 'string'],
            [['owner_id'], 'required'],
            [['owner_id', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
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
            'owner_id' => 'Owner ID',
            'users_id' => 'Users ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status' => 'Status',
        ];
    }
}
