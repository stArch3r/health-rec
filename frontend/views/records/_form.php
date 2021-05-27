<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Doctors;
use frontend\models\Patient;

use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\Records */
/* @var $form yii\widgets\ActiveForm */
$watu = ArrayHelper::map(Doctors::find()->all(), 'doctorId', 'docName');
$pat = ArrayHelper::map(Patient::find()->all(), 'paId', 'Name');
?>

<div class="records-form">
    <div class="container">
    <?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'patientId')->dropDownList($pat) ?>

<?= $form->field($model, 'diagnosis')->textarea(['rows' => 6]) ?>

<?= $form->field($model, 'date')->widget(DatePicker::classname(), [
            'options' => ['placeholder' => 'Enter Expected Return date ...'],
            'pluginOptions' => [
                'autoclose'=>true,
                'format'=>'yyyy/mm/dd'
            ]
        ]);
     ?>
 
<?= $form->field($model, 'doctorId')->dropDownList($watu) ?>

<div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>
    </div>

  

</div>
