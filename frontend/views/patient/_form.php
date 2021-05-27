<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Doctors;
use frontend\models\Patient;

/* @var $this yii\web\View */
/* @var $model frontend\models\Patient */
/* @var $form yii\widgets\ActiveForm */

$doc = ArrayHelper::map(Doctors::find()->all(), 'doctorId', 'docName');
?>

<div class="patient-form">
  <div class="container">

  <?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'age')->textInput() ?>

<?= $form->field($model, 'gender')->dropDownList([ 'male' => 'Male', 'female' => 'Female', 'non-binary' => 'Non-binary', '' => '', ], ['prompt' => '']) ?>

<?= $form->field($model, 'phoneNo')->textInput() ?>

<?= $form->field($model, 'doctorId')->dropDownList($doc) ?>

<?= $form->field($model, 'disease')->textarea(['rows' => 6]) ?>

<?= $form->field($model, 'weight')->textInput() ?>

<div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>
  </div>


</div>
