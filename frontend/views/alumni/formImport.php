<?php 
use kartik\widgets\ActiveForm;
use kartik\widgets\FileInput
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'imageFile')->widget(FileInput::classname(), [
		    
		    'pluginOptions' => [
		        'browseClass' => 'btn btn-success',
		        'uploadClass' => 'btn btn-info',
		        'removeClass' => 'btn btn-danger',
		        'removeIcon' => '<i class="glyphicon glyphicon-trash"></i> '
		    ]
		]);
     ?> 

<?php ActiveForm::end() ?>

</div>