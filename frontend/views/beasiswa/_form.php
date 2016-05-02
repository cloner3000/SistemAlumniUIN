<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\widgets\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\Beasiswa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="beasiswa-form">

    <?php $form = ActiveForm::begin([
        'formConfig' => ['labelSpan' => 2, 'deviceSize' => ActiveForm::SIZE_TINY]
    ]); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batas_waktu')->textInput(['maxlength' => true]) ?>

     <?php echo $form->field($model, 'batas_waktu')->widget(DatePicker::classname(), [
            'options' => ['placeholder' => 'Masukan batas waktu pengajuan...'],
            'removeButton' => false,
            'pluginOptions' => [
                'autoclose'=>true
            ]
        ]); 
    ?>

    <?= $form->field($model, 'syarat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'proses_seleksi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'publikasi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Tambah' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
