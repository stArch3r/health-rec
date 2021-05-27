<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Patient */
/* @var $form ActiveForm */
?>
<div class="watu">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'Name') ?>
        <?= $form->field($model, 'age') ?>
        <?= $form->field($model, 'gender') ?>
        <?= $form->field($model, 'phoneNo') ?>
        <?= $form->field($model, 'doctorId') ?>
        <?= $form->field($model, 'disease') ?>
        <?= $form->field($model, 'weight') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- watu -->
