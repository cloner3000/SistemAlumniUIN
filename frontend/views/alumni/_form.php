<?php

use yii\bootstrap\Modal;
use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\widgets\DatePicker;
use kartik\label\LabelInPlace;

/* @var $this yii\web\View */
/* @var $model frontend\models\Alumni */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alumni-form">

    <?php $form = ActiveForm::begin([
        'id' => 'signup-form',
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 2, 'deviceSize' => ActiveForm::SIZE_TINY]
        ]
    ); ?>

    <div class="well form-actions">
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-primary' : 'btn btn-primary']) ?>
            <?= Html::resetButton('Reset', ['class' => 'reset btn btn-warning']) ?>
         </div>
    </div>

    <p style="border-bottom: 1px solid #D0D0D0;"><b><i> Data Diri </i></b></p>

    <?= $form->field($model, 'nim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_kelamin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?> 

    <?php echo $form->field($model, 'tanggal_lahir')->widget(DatePicker::classname(), [
            'options' => ['placeholder' => 'Masukan Tanggal Lahir Anda...'],
            'removeButton' => false,
            'pluginOptions' => [
                'autoclose'=>true
            ]
        ]); 
    ?>

    <?= $form->field($model, 'nama_ayah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_ibu')->textInput(['maxlength' => true]) ?>

    <p style="border-bottom: 1px solid #D0D0D0;"><b><i> Alamat </i></b></p>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'alt_kelurahan_desa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alt_kecamatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alt_kab_kota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alt_provinsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alt_negara')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomor_telpon')->textInput(['maxlength' => true]) ?>

    <p style="border-bottom: 1px solid #D0D0D0;"><b><i> Asal Sekolah </i></b></p>

    <?= $form->field($model, 'asal_sekolah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asl_skl_kelurahan_desa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asl_skl_kecamatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asl_skl_kab_kota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asl_skl_provinsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asl_skl_negara')->textInput(['maxlength' => true]) ?>

    <p style="border-bottom: 1px solid #D0D0D0;"><b><i> Lain-lain </i></b></p>

    <?= $form->field($model, 'fakultas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jurusan_prodi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kons')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'semester')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'tanggal_lulus')->widget(DatePicker::classname(), [
            'options' => ['placeholder' => 'Masukan Tanggal Lulus Anda...'],
            'removeButton' => false,
            'pluginOptions' => [
                'autoclose'=>true
            ]
        ]); 
    ?>

    <?= $form->field($model, 'ipk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prediket')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pembimbing')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'judul_skripsi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fakultas_nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jurusan_ket')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jurusan_inggris')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenjang_program')->textInput(['maxlength' => true]) ?>
 
    <?php ActiveForm::end(); ?>

</div>
