<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Alumni */

$this->title = 'Tambah Alumni';
$this->params['breadcrumbs'][] = ['label' => 'Alumnis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumni-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
