<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\BeasiswaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="beasiswa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'jenis') ?>

    <?= $form->field($model, 'batas_waktu') ?>

    <?= $form->field($model, 'syarat') ?>

    <?php // echo $form->field($model, 'proses_seleksi') ?>

    <?php // echo $form->field($model, 'publikasi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
