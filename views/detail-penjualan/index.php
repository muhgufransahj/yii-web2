<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\basicDetailPenjualan;

/* @var $this yii\web\View */
/* @var $searchModel app\models\basicDetailPenjualanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Basic Detail Penjualans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="basic-detail-penjualan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Basic Detail Penjualan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'barang.nama_barang',
            //'no_nota',
            //'kode_barang',
            'harga_jual',
            'jumlah_jual',
            'subtotal',
            'penjualan.total_bayar',
            
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, basicDetailPenjualan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_nota' => $model->no_nota]);
                 }
            ],
        ],
    ]); ?>


</div>
