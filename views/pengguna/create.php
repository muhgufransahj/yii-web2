<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\basicPengguna */

$this->title = 'Create Basic Pengguna';
$this->params['breadcrumbs'][] = ['label' => 'Basic Penggunas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="basic-pengguna-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
