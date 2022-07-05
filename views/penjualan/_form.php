<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\basicPenjualan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="basic-penjualan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tgl_nota')->textInput() ?>

    <?= $form->field($model, 'total_bayar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'userid')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
