<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PekerjaanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pekerjaan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nim') ?>

    <?= $form->field($model, 'tempat_kerja') ?>

    <?= $form->field($model, 'status_tempat_kerja') ?>

    <?= $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'kode_pos') ?>

    <?php // echo $form->field($model, 'kelurahan') ?>

    <?php // echo $form->field($model, 'kecamatan') ?>

    <?php // echo $form->field($model, 'kabkota') ?>

    <?php // echo $form->field($model, 'provinsi') ?>

    <?php // echo $form->field($model, 'negara') ?>

    <?php // echo $form->field($model, 'telpon') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'tanggal_masuk') ?>

    <?php // echo $form->field($model, 'tanggal_keluar') ?>

    <?php // echo $form->field($model, 'jabatan') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'gaji') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
