<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pekerjaan */
/* @var $form yii\widgets\ActiveForm */
$id = $_GET['id'];
?>

<div class="pekerjaan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nim')->textInput(['maxlength' => true, 'value' => $id, 'id' => 'disabledTextInput']) ?>

    <?= $form->field($model, 'tempat_kerja')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_tempat_kerja')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_pos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kelurahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kecamatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kabkota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'provinsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'negara')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telpon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_masuk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_keluar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jabatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gaji')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
