<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Alumni */

$this->title = $model->nim;
$this->params['breadcrumbs'][] = ['label' => 'Alumni'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumni-view">
    <div class="bs-callout bs-callout-info">
        <h1><?= Html::encode($this->title) ?></h1>  
    </div>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->nim], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Tambah data pekerjaan', ['pekerjaan/create', 'id' => $model->nim], [
            'class' => 'btn btn-info',
             
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nim',
            'nama',
            'jenis_kelamin',
            'tempat_lahir',
            'tanggal_lahir',
            'nama_ayah',
            'nama_ibu',
            'alamat:ntext',
            'alt_kelurahan_desa',
            'alt_kecamatan',
            'alt_kab_kota',
            'alt_provinsi',
            'alt_negara',
            'nomor_telpon',
            'asal_sekolah',
            'asl_skl_kelurahan_desa',
            'asl_skl_kecamatan',
            'asl_skl_kab_kota',
            'asl_skl_provinsi',
            'asl_skl_negara',
            'fakultas',
            'jurusan_prodi',
            'kons',
            'semester',
            'tanggal_lulus',
            'ipk',
            'prediket',
            'pembimbing',
            'judul_skripsi:ntext',
            'fakultas_nama',
            'jurusan_ket',
            'jurusan_inggris',
            'jenjang_program',
        ],
    ]) ?>

    <div class="panel-heading">
        <h2 class="panel-title">Pekerjaan </h2>
    </div>
    <table class="table">
        <tr class="info">
            <th>NO</th>
            <th>Tempat Kerja</th>
            <th>Status</th>
            <th>Alamat</th>
            <th>Jabatan</th>
            <th>Gaji</th>
            <th>Tanggal Masuk</th>
            <th>Tanggal Keluar</th>

        </tr>

    <?php //echo '<pre>'. var_export($model2, true).'</pre>' ?>
    <?php 
        $no = 1;
        foreach ($model2 as $key => $value) {
            # code...
           echo '
           <tr>
                 <td> '. $no++ .' </td>
                 <td> '. $value->tempat_kerja .' </td>
                 <td> '. $value->status_tempat_kerja .' </td>
                 <td> '. $value->alamat .' </td>
                 <td> '. $value->jabatan .' </td>
                 <td> '. $value->gaji .' </td>
                 <td> '. $value->tanggal_masuk .' </td>
                 <td> '. $value->tanggal_keluar .' </td> 

           </tr>
           ';
        }
     ?>
    </table>

</div>
