<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\basicPenjualan */

$this->title = 'Create Basic Penjualan';
$this->params['breadcrumbs'][] = ['label' => 'Basic Penjualans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="basic-penjualan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
