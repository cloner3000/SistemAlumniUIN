<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AlumniSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alumni';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumni-index">
<div class="card" style="margin-top:15px;">
<div class="card-body">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
         
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nim',
            'nama',
            //'jenis_kelamin',
           // 'tempat_lahir',
           // 'tanggal_lahir',
            // 'nama_ayah',
            // 'nama_ibu',
            // 'alamat:ntext',
            // 'alt_kelurahan_desa',
            // 'alt_kecamatan',
            // 'alt_kab_kota',
            // 'alt_provinsi',
            // 'alt_negara',
            // 'nomor_telpon',
            // 'asal_sekolah',
            // 'asl_skl_kelurahan_desa',
            // 'asl_skl_kecamatan',
            // 'asl_skl_kab_kota',
            // 'asl_skl_provinsi',
            // 'asl_skl_negara',
            // 'fakultas',
            // 'jurusan_prodi',
            // 'kons',
            // 'semester',
             'tanggal_lulus',
            // 'ipk',
            // 'prediket',
            // 'pembimbing',
            // 'judul_skripsi:ntext',
             'fakultas_nama',
             'jurusan_ket',
            // 'jurusan_inggris',
            // 'jenjang_program',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    </div>
    </div>

</div>
