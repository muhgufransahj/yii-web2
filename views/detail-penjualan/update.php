<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\basicDetailPenjualan */

$this->title = 'Update Basic Detail Penjualan: ' . $model->no_nota;
$this->params['breadcrumbs'][] = ['label' => 'Basic Detail Penjualans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_nota, 'url' => ['view', 'no_nota' => $model->no_nota]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="basic-detail-penjualan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
