<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\basicPenjualan;

/* @var $this yii\web\View */
/* @var $searchModel app\models\basicPenjualanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Basic Penjualans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="basic-penjualan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Basic Penjualan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_nota',
            'tgl_nota',
            'total_bayar',
            'userid',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, basicPenjualan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_nota' => $model->no_nota]);
                 }
            ],
        ],
    ]); ?>


</div>
