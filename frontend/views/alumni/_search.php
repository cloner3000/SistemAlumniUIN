<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\AlumniSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alumni-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nim') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'jenis_kelamin') ?>

    <?= $form->field($model, 'tempat_lahir') ?>

    <?= $form->field($model, 'tanggal_lahir') ?>

    <?php // echo $form->field($model, 'nama_ayah') ?>

    <?php // echo $form->field($model, 'nama_ibu') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'alt_kelurahan_desa') ?>

    <?php // echo $form->field($model, 'alt_kecamatan') ?>

    <?php // echo $form->field($model, 'alt_kab_kota') ?>

    <?php // echo $form->field($model, 'alt_provinsi') ?>

    <?php // echo $form->field($model, 'alt_negara') ?>

    <?php // echo $form->field($model, 'nomor_telpon') ?>

    <?php // echo $form->field($model, 'asal_sekolah') ?>

    <?php // echo $form->field($model, 'asl_skl_kelurahan_desa') ?>

    <?php // echo $form->field($model, 'asl_skl_kecamatan') ?>

    <?php // echo $form->field($model, 'asl_skl_kab_kota') ?>

    <?php // echo $form->field($model, 'asl_skl_provinsi') ?>

    <?php // echo $form->field($model, 'asl_skl_negara') ?>

    <?php // echo $form->field($model, 'fakultas') ?>

    <?php // echo $form->field($model, 'jurusan_prodi') ?>

    <?php // echo $form->field($model, 'kons') ?>

    <?php // echo $form->field($model, 'semester') ?>

    <?php // echo $form->field($model, 'tanggal_lulus') ?>

    <?php // echo $form->field($model, 'ipk') ?>

    <?php // echo $form->field($model, 'prediket') ?>

    <?php // echo $form->field($model, 'pembimbing') ?>

    <?php // echo $form->field($model, 'judul_skripsi') ?>

    <?php // echo $form->field($model, 'fakultas_nama') ?>

    <?php // echo $form->field($model, 'jurusan_ket') ?>

    <?php // echo $form->field($model, 'jurusan_inggris') ?>

    <?php // echo $form->field($model, 'jenjang_program') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
