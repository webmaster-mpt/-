<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\role */

$this->title = 'Добавить роль';
$this->params['breadcrumbs'][] = ['label' => 'Роли', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<style>

.breadcrumb{
    background-color: #9370DB;
    color:#000000;
    width:260px;
}
.breadcrumb a{
    background-color: #9370DB;
    color:#000000;
}
.breadcrumb .active{
    background-color: #9370DB;
    color:#000000;
}
.control-label{
    color:white;
}
.breadcrumb .active::before{
    background-color: #9370DB;
    color:#000000;
}
.btn-success{
    background-color: #9370DB;
    color:#000000;
    border-color:#000000;
}

.form-control{
    background-color: #000000;
    color:white;
    border-color: #9370DB;
    width: 100%;
}
.form-control:hover{
    border-color: #9370DB;
}
</style>
<div class="role-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
