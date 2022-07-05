<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\basicJenisBarang;

/* @var $this yii\web\View */
/* @var $searchModel app\models\basicJenisbarangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Basic Jenisbarangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="basic-jenisbarang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Basic Jenisbarang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_jenis',
            'nama_jenis',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, basicJenisbarang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_jenis' => $model->kode_jenis]);
                 }
            ],
        ],
    ]); ?>


</div>
