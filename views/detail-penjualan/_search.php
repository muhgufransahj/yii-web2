<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\basicDetailPenjualanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="basic-detail-penjualan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_nota') ?>

    <?= $form->field($model, 'kode_barang') ?>

    <?= $form->field($model, 'harga_jual') ?>

    <?= $form->field($model, 'jumlah_jual') ?>

    <?= $form->field($model, 'subtotal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
