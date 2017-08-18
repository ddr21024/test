<?php

use yii\db\Migration;

class m170808_161139_create_task_table extends Migration
{
    public function Up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('task', [
            'id' => $this->primaryKey(),
            'task_name' => $this->string(255),
            'task_description' => $this->string(4000),
            'task_createtime' => $this->dateTime(255),
            'task_edit_time' => $this->dateTime(255),
            'task_term' => $this->dateTime(255),
            'task_status_id' => $this->integer(11),
        ], $tableOptions);
    }

    public function Down()
    {
        $this->dropTable('task');
    }

}
