<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Beasiswa */

$this->title = 'Tambah Beasiswa';
$this->params['breadcrumbs'][] = ['label' => 'Beasiswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="beasiswa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
