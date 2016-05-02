<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PekerjaanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pekerjaans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pekerjaan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pekerjaan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nim',
            'tempat_kerja',
            'status_tempat_kerja',
            'alamat',
            // 'kode_pos',
            // 'kelurahan',
            // 'kecamatan',
            // 'kabkota',
            // 'provinsi',
            // 'negara',
            // 'telpon',
            // 'email:email',
            // 'tanggal_masuk',
            // 'tanggal_keluar',
            // 'jabatan',
            // 'status',
            // 'gaji',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
