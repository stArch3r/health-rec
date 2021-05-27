<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PatientSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patient-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'paId') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'age') ?>

    <?= $form->field($model, 'gender') ?>

    <?= $form->field($model, 'phoneNo') ?>

    <?php // echo $form->field($model, 'doctorId') ?>

    <?php // echo $form->field($model, 'disease') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
