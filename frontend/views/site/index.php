<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Frontend API</h1>

        <p class="lead">Должно реализовывать следующие публичные(доступны без авторизации) методы:</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Frontend API </h2>

                <p>Должно реализовывать следующие публичные(доступны без авторизации) методы:<br>
                    1. Просмотр списка задач с возможностью фильтрации по всем полям кроме описания<br>
                    2. Просмотр одной задачи по идентификатору<br>
                    3. Смена статуса задачи<br>
                </p>

                <p><?= Html::a('Просмотр списка задач', ['task/index'], ['class' => 'btn btn-default']) ?></p>
            </div>
        </div>

    </div>
</div>
