<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\basicDetailPenjualan */

$this->title = 'Create Basic Detail Penjualan';
$this->params['breadcrumbs'][] = ['label' => 'Basic Detail Penjualans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="basic-detail-penjualan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
