<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Komentar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="komentar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_berita')->textInput() ?>

    <?= $form->field($model, 'komentar')->textInput() ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'jam')->textInput() ?>

    <?= $form->field($model, 'pengomentar')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
