<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\basicPengguna;

/* @var $this yii\web\View */
/* @var $searchModel app\models\basicPenggunaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Basic Penggunas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="basic-pengguna-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Basic Pengguna', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
           // 'userid',
           // 'passid',
            'nama',
            'status',
            'pengguna.total_bayar',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, basicPengguna $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
