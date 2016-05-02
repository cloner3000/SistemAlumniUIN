<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\KomentarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="komentar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode') ?>

    <?= $form->field($model, 'kode_berita') ?>

    <?= $form->field($model, 'komentar') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'jam') ?>

    <?php // echo $form->field($model, 'pengomentar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
