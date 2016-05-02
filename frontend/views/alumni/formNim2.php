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
        'formConfig' => ['labelSpan' => 2, 'deviceSize' => ActiveForm::SIZE_TINY],
        'method' => 'POST',
        ]
    ); ?>

    <div class="well form-actions">
        <div class="form-group">
			<button class="btn btn-primary">Submit</button>        		
             <?= Html::resetButton('Reset', ['class' => 'reset btn btn-warning']) ?>
         </div>
    </div>

    <p style="border-bottom: 1px solid #D0D0D0;"><b><i>Konfirmasi Data Diri </i></b></p>

    <p>isi nama ayah dan nama ibu anda dengan benar untuk dapat mengverifikasi data anda :</p>

	<?= $form->field($model, 'nim', ['options' => ['value'=> 'your value' ]])->textInput(['readonly' => true]) ?><br/>
	
	<label class="control-label col-xs-2" for="alumni-nama_ayah">Nama Ayah</label>
	<div class="col-xs-10"><input id="alumni-nama_ayah" class="form-control" name="Alumni[nama_ayah]" value="" type="text"></div>
	<div class="col-xs-offset-1 col-xs-11"></div>
	<div class="col-xs-offset-1 col-xs-11"><div class="help-block"></div></div>

	<label class="control-label col-xs-2" for="alumni-nama_ibu">Nama Ibu</label>
	<div class="col-xs-10"><input id="alumni-nama_ibu" class="form-control" name="Alumni[nama_ibu]" value="" type="text"></div>
	<div class="col-xs-offset-1 col-xs-11"></div>
	<div class="col-xs-offset-1 col-xs-11"><div class="help-block"></div></div>
<?php echo $model->nama_ibu; ?>
    <?php ActiveForm::end(); ?>

</div>
