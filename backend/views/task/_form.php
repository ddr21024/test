<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Status;
use yii\helpers\ArrayHelper;
use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Task */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="task-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'task_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'task_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'task_term')->widget(DateTimePicker::classname(), [
                'options' => ['placeholder' => 'task_term'],
                'removeButton' => false,
                'pluginOptions' => [
                    'autoclose' => true,
                    'todayHighlight' => true,
                    'weekStart' => 1,
                ],
            ] ) ?>

    <?= $form->field($model, 'task_status_id')->dropDownList(ArrayHelper::map(Status::find()->all(), 'id', 'status_name'), ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
