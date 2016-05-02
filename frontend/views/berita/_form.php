<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;
use kartik\widgets\FileInput;

/* @var $this yii\web\View */
/* @var $model frontend\models\Berita */
/* @var $form yii\widgets\ActiveForm */
date_default_timezone_set('Asia/Jakarta');

?>

<div class="berita-form">

    <?php $form = ActiveForm::begin([
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 2, 'deviceSize' => ActiveForm::SIZE_TINY],
        'options' => ['enctype' => 'multipart/form-data'],
    ]); ?>

    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isi')->widget(TinyMce::className(), [
        'options' => ['rows' => 6],
       // 'language' => 'es',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ]);?>

    <?= $form->field($model, 'penulis')->textInput(['maxlength' => true, 'readonly' => true, 'value' => Yii::$app->user->identity->username]) ?>

    <?= $form->field($model, 'tanggal_post')->textInput(['maxlength' => true, 'readonly' => true, 'value' => date('d-m-Y')]) ?>

    <?= $form->field($model, 'jam_post')->textInput(['maxlength' => true, 'readonly' => true, 'value' => date('h:i:s')]) ?>

    <?= $form->field($model, 'kategori')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model2, 'imageFile')->widget(FileInput::classname(), [
            
            'pluginOptions' => [
                'browseClass' => 'btn btn-success',
                'uploadClass' => 'btn btn-info',
                'removeClass' => 'btn btn-danger',
                'removeIcon' => '<i class="glyphicon glyphicon-trash"></i> '
            ]
        ]);
     ?> 

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?> 

</div>
