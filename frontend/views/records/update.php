<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Records */

$this->title = 'Update Records: ' . $model->recordId;
$this->params['breadcrumbs'][] = ['label' => 'Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->recordId, 'url' => ['view', 'id' => $model->recordId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="records-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
