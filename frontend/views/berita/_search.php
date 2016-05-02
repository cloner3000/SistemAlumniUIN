<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\BeritaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="berita-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode') ?>

    <?= $form->field($model, 'judul') ?>

    <?= $form->field($model, 'isi') ?>

    <?= $form->field($model, 'penulis') ?>

    <?= $form->field($model, 'tanggal_post') ?>

    <?php // echo $form->field($model, 'jam_post') ?>

    <?php // echo $form->field($model, 'kategori') ?>

    <?php // echo $form->field($model, 'gambar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
