<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Alumni */

$this->title = 'Update Data Alumni: ' . ' ' . $model->nim;
$this->params['breadcrumbs'][] = ['label' => 'Alumnis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nim, 'url' => ['view', 'id' => $model->nim]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="alumni-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
