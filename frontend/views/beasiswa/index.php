<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\BeasiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Beasiswa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="beasiswa-index">
    <div class="card" style="margin-top:15px;">
    <div class="card-body">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

     

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode',
            'nama',
            'jenis',
            'batas_waktu',
            'syarat:ntext',
            // 'proses_seleksi',
            // 'publikasi',

           // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    </div>
    </div>

</div>
