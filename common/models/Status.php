<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "status".
 *
 * @property integer $id
 * @property string $status_name
 * @property integer $status_sorting
 *
 * @property Task[] $tasks
 */
class Status extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status_sorting'], 'integer'],
            [['status_sorting'], 'required'],
            [['status_name'], 'string', 'max' => 255],
            [['status_name'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status_name' => 'Status Name',
            'status_sorting' => 'Status Sorting',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTasks()
    {
        return $this->hasMany(Task::className(), ['task_status' => 'status_name']);
    }
}
