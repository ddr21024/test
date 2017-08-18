<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use common\models\Status;
use yii\helpers\ArrayHelper;
use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TaskSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tasks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <!-- <?= Html::a('Create Task', ['create'], ['class' => 'btn btn-success']) ?> -->
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'task_name',
            //'task_description',
            [
                'attribute' => 'task_createtime',
                'format' => 'html',
                'filter' =>  DateTimePicker::widget([
                    'name' => 'TaskSearch[task_createtime]',
                     'type' => DateTimePicker::TYPE_INPUT,
                     'model' => $searchModel,
                     'pluginOptions' => [
                             'autoclose'=>true,
                             'todayHighlight' => true,
                             'weekStart' => 1,
                             'format' => 'yyyy-mm-dd hh:ii:ss'
                            ]
                    ])
            ],
            [
                'attribute' => 'task_edit_time',
                'format' => 'html',
                'filter' =>  DateTimePicker::widget([
                    'name' => 'TaskSearch[task_edit_time]',
                     'type' => DateTimePicker::TYPE_INPUT,
                     'model' => $searchModel,
                     'pluginOptions' => [
                             'autoclose'=>true,
                             'todayHighlight' => true,
                             'weekStart' => 1,
                             'format' => 'yyyy-mm-dd hh:ii:ss'
                            ]
                    ])
            ],
            [
                'attribute' => 'task_term',
                'format' => 'html',
                'filter' =>  DateTimePicker::widget([
                    'name' => 'TaskSearch[task_term]',
                     'type' => DateTimePicker::TYPE_INPUT,
                     'model' => $searchModel,
                     'pluginOptions' => [
                             'autoclose'=>true,
                             'todayHighlight' => true,
                             'weekStart' => 1,
                             'format' => 'yyyy-mm-dd hh:ii:ss'
                            ]
                    ])
            ],
            [
                'attribute' => 'task_status_id',
                'filter' => ArrayHelper::map(Status::find()->all(), 'id', 'status_name'),
                'content' => function ($model) { return $model->taskStatus->status_name; },
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update}',

            ],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
