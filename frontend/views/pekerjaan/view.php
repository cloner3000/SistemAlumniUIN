<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pekerjaan */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pekerjaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pekerjaan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nim',
            'tempat_kerja',
            'status_tempat_kerja',
            'alamat',
            'kode_pos',
            'kelurahan',
            'kecamatan',
            'kabkota',
            'provinsi',
            'negara',
            'telpon',
            'email:email',
            'tanggal_masuk',
            'tanggal_keluar',
            'jabatan',
            'status',
            'gaji',
        ],
    ]) ?>

</div>
