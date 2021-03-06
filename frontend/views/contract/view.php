<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\ArrayHelper;
use frontend\models\Sotrudnik;
/* @var $this yii\web\View */
/* @var $model frontend\models\contract */
$this->title = ArrayHelper::getValue($model,'sotrudnik.name');
$this->params['breadcrumbs'][] = ['label' => 'Контракт', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<style>

.breadcrumb{
    background-color: #9370DB;
    color:#000000;
    width:250px;
}
.breadcrumb a{
    background-color: #9370DB;
    color:#000000;
}
.breadcrumb .active{
    background-color: #9370DB;
    color:#000000;
}
span{
    color:#9370DB;
}
.breadcrumb .active::before{
    background-color: #9370DB;
    color:#000000;
}
.btn-primary, .btn-danger{
    background-color: #9370DB;
    color:#000000;
    border-color:#000000;
}
.summary{
    color:#800000;
}

th{
    background-color: #9370DB;
    border-color:#000000;
    
    color: #000000;
}
td{
    background-color: #9370DB;
    border-color:#000000;
    color: #000000;
}
tr{
    background-color: #9370DB;
    border-color:#000000;
    color: #000000;  
}
.form-control{
    background-color: #000000;
    color:white;
    border-color: #9370DB;
    width: 110px;
}
.form-control:hover{
    border-color: #9370DB;
}
</style>
<div class="contract-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы точно хотите удалить данный контракт?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute'=>'klient.name',
                'value'=> ArrayHelper::getValue($model,'klient.name'),
            ],
            
            [
                'attribute'=>'operations.name',
                'value'=> ArrayHelper::getValue($model,'operations.name'),
            ],
            [
                'attribute'=>'property.name',
                'value'=> ArrayHelper::getValue($model,'property.name'),
            ],
            [
                'attribute'=>'sotrudnik.name',
                'value'=> ArrayHelper::getValue($model,'sotrudnik.name'),
            ],
            'date_On',
            'date_Off',
        ],
    ]) ?>
</div>
