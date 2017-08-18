<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "task".
 *
 * @property integer $id
 * @property string $task_name
 * @property string $task_description
 * @property string $task_createtime
 * @property string $task_edit_time
 * @property string $task_term
 * @property string $task_status_id
 *
 * @property Status $taskStatus
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'task';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['task_createtime', 'task_edit_time', 'task_term'], 'safe'],
            [['task_name'], 'string', 'max' => 255],
            [['task_description'], 'string', 'max' => 4000],
            [['task_status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['task_status_id' => 'id']],
            [['task_name', 'task_description', 'task_status_id'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'task_name' => 'Task Name',
            'task_description' => 'Task Description',
            'task_createtime' => 'Task Createtime',
            'task_edit_time' => 'Task Edit Time',
            'task_term' => 'Task Term',
            'task_status_id' => 'Task Status ID',
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['task_createtime'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['task_edit_time'],
                ],
                'value' => function() {
                    return Date('Y-m-d H:i:s');
                },
            ],
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaskStatus()
    {
        return $this->hasOne(Status::className(), ['id' => 'task_status_id']);
    }
}
