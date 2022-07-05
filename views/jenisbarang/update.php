<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\basicJenisbarang */

$this->title = 'Update Basic Jenisbarang: ' . $model->kode_jenis;
$this->params['breadcrumbs'][] = ['label' => 'Basic Jenisbarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_jenis, 'url' => ['view', 'kode_jenis' => $model->kode_jenis]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="basic-jenisbarang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
