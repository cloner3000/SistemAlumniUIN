<?php  
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap;

/* @var $this yii\web\View */
/* @var $model frontend\models\Mahasiswa */

$this->title = 'Konfirmasi Alumni';
$this->params['breadcrumbs'][] = ['label' => 'Alumni', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title; 

?>

<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Isi data berikut untuk mendapatkan password:</p>

    <div class="row">
        <div class="col-lg-5">
            
            <?= Html::beginForm(['mahasiswa/lihat'], 'post', ['enctype' => 'multipart/form-data']) ?>

           		<?= Html::input('text', 'nim', '', ['class' => 'form-control']) ?><br/>

				<?= Html::input('date', 'tanggal', '', ['class' => 'form-control']) ?><br/>

				<?= Html::input('text', 'nama_ayah', '', ['class' => 'form-control']) ?><br/>

				<?= Html::input('text', 'nama_ibu', '', ['class' => 'form-control']) ?><br/>
               
                <div class="dropdown">
                      <a href="#" data-toggle="dropdown" class="dropdown-toggle">Label <b class="caret"></b></a>
                      <?php
                          echo yii\bootstrap\Dropdown::widget([
                             'items' => [
                                  ['label' => 'DropdownA', 'url' => '/'],
                                  ['label' => 'DropdownB', 'url' => '#'],
                              ],
                          ]);
                      ?>
                  </div>
 
				<?= Html::submitButton('Submit', ['class' => 'submit btn btn-primary']) ?> 
				<?= Html::resetButton('Reset', ['class' => 'reset btn btn-warning']) ?>
				

            <?= Html::endForm() ?>
        </div>
    </div>
</div>
