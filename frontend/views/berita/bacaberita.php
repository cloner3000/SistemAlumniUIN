<?php 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = $model->judul;
 ?>
 <div class="content">
 	<div class="row" style="margin-top: 15px">
 	<div class="card">
 	<div class="card-body">
 	<div class="judul">
 		<h2 class="text-left" style="border-left: 3px solid #5bc0de;">&nbsp;&nbsp;<?= $model->judul ?></h2>
 		<blockquote>
		 	<footer>Pada : <?= $model->tanggal_post ?> <cite title="Source Title"> <?= ' '.$model->jam_post ?></cite></footer>
		</blockquote>

 	</div>
 	<div class="image">
 		<?= Html::img("/alumniuin/frontend/uploads/berita/gambar/$model->gambar", ['width' => '500' ]);?>             		
 	</div>
 	<div class="lead">
 		<?= $model->isi ?>
 	</div>
 	<div class="komentar">
 		<h2>Komentar :</h2>
 		 
		<div class="komentar-form">

		    <?php $form = ActiveForm::begin([
		    	'layout' => 'horizontal'
		    ]); ?>

		    <?= $form->field($model2, 'kode_berita')->hiddenInput(['value' => $model->kode])->label(false) ?>

		    <?= $form->field($model2, 'komentar')->textArea(['rows' => 6]) ?>

		    <?= $form->field($model2, 'tanggal')->textInput(['value' => date('d-m-Y'), 'readonly' => true]) ?>

		    <?= $form->field($model2, 'jam')->textInput(['value' => date('h:i:s'), 'readonly' => true]) ?>

		    <?= $form->field($model2, 'pengomentar')->textInput(['value' => 'Admin', 'readonly' => true]) ?>

		    <div class="form-group">
		        <?= Html::submitButton( 'Submit', ['class' => 'btn btn-primary']) ?>
		    </div>

		    <?php ActiveForm::end(); ?>

		</div>

 	</div>
 	</div>
 	</div>
 	</div>
 </div>