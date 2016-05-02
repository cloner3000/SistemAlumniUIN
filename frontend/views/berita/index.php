<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\BeritaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Berita';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="berita-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'kode',
            'judul',
           // 'isi:ntext',
            'penulis',
            'tanggal_post',
            // 'jam_post',
            // 'kategori',
            // 'gambar',

           // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
