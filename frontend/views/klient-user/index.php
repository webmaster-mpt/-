<?php

use frontend\models\Operations;
use frontend\models\Property;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\KlientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Клиент';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>

.breadcrumb{
    background-color: #9370DB;
    color:#000000;
    width:162px;
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
.btn-success{
    background-color: #9370DB;
    color:#000000;
    border-color:#000000;
}
.summary{
    color:#800000;
}
th{
    color: #4682B4;
}
td{
    background-color: #000000;
    color: white;
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
<div class="klient-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Fname',
            'name',
            'Sname',
            [
                'attribute'=>'id_property',
                'filter'=> Property::find()->select(['name','id'])->indexBy('id')->column(),
                'value' => 'property.name'
            ],
            'rooms',
            'photo',
            'address:ntext',
            'telephone',
            [
                'attribute'=>'id_operations',
                'filter'=> Operations::find()->select(['name','id'])->indexBy('id')->column(),
                'value' => 'operations.name'
            ],
            'cost',
            'udobstva:ntext',
            'activeContract',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
        <p>
        <?= Html::a('Добавить недвижимость', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

</div>
