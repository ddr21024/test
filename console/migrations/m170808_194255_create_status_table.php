<?php

use yii\db\Migration;

/**
 * Handles the creation of table `status`.
 */
class m170808_194255_create_status_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('status', [
            'id' => $this->primaryKey(),
            'status_name' => $this->string(255),
            'status_sorting' => $this->integer(255),
        ], $tableOptions);
       // $this->createIndex('index_status', 'status', 'status_name');
        $this->addForeignKey('fk_status', 'task', 'task_status_id', 'status', 'id', 'RESTRICT');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey('fk_status', 'task');
        $this->dropTable('status');
    }
}
