<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Административная панель </h1>

        <p class="lead">Должна быть защищена авторизацией и иметь интерфейс со следующими разделами:</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Задачи</h2>

                <p>1. Список задач<br>
                    2. Просмотр/редактирование/добавление задачи<br>
                    3. Удаление задачи<br>
                </p>

                <p><?= Html::a('Задачи', ['task/index'], ['class' => 'btn btn-default']) ?></p>
            </div>
            <div class="col-lg-4">
                <h2>Статусы</h2>

                <p>4. Список статусов<br>
                    5. Просмотр/редактирование/добавление статусов<br>
                    6. Удаление статусов<br>
                </p>

                <p><?= Html::a('Статусы', ['status/index'], ['class' => 'btn btn-default']) ?></p>
            </div>
            <div class="col-lg-4">
                <h2>Пользователи</h2>

                <p>
                    7. Список пользователей<br>
                    8. Просмотре/редактирование/удаление пользователей<br>
                </p>

                <p><?= Html::a('Пользователи', ['user/index'], ['class' => 'btn btn-default']) ?></p>
            </div>
        </div>

    </div>
</div>
