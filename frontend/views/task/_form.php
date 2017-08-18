<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Status;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Task */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="task-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'task_name')->textInput(['disabled' => 'disabled']) ?>

    <?= $form->field($model, 'task_description')->textInput(['disabled' => 'disabled']) ?>

    <?= $form->field($model, 'task_createtime')->textInput(['disabled' => 'disabled']) ?>

    <?= $form->field($model, 'task_edit_time')->textInput(['disabled' => 'disabled']) ?>

    <?= $form->field($model, 'task_term')->textInput(['disabled' => 'disabled']) ?>

    <?= $form->field($model, 'task_status_id')->dropDownList(ArrayHelper::map(Status::find()->all(), 'id', 'status_name'), ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Сменить статус', ['class' => 'btn btn-primary']) ?>

        <?= Html::a('Назад', ['task/index'], ['class' => 'btn btn-default']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>
