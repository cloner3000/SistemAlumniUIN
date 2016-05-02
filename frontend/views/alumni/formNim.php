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
<div class="card" style="margin-top: 15px">
<div class="card-body">
<div class="alumni-form">

    <?php $form = ActiveForm::begin([
        'id' => 'signup-form',
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 1, 'deviceSize' => ActiveForm::SIZE_TINY],
        'method' => 'GET',
        ]
    ); ?>

    <div class="well form-actions">
        <div class="form-group">
			<button class="btn btn-primary">Submit</button>  
            <?= Html::resetButton('Reset', ['class' => 'reset btn btn-warning']) ?>
            <button onclick="myFunction()" class="btn btn-success">Test JS</button>
         </div>
    </div>

    <p style="border-bottom: 1px solid #D0D0D0;"><b><i>Konfirmasi Data Diri </i></b></p>

    <p>isi nim anda untuk mengkonfirmasi akun :</p>

	<?= $form->field($model, 'nim') ?><br/>

    <?php ActiveForm::end(); ?>

</div>
</div>
</div>
<script>
function myFunction()
{
alert("I am an alert box!");
}
</script>
