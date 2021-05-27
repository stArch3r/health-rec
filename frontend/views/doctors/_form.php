<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Doctors */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doctors-form">
<div class="container">

<?php $form = ActiveForm::begin(); ?>
<form>
  <div class="form-row">
    <div class="col">
    <?= $form->field($model, 'docName')->textInput(['maxlength' => true]) ?>

    </div>
    <div class="col">
   
<?= $form->field($model, 'dept')->textInput(['maxlength' => true]) ?>
    </div>
  </div>
</form>



<div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>
</div>

   

</div>
