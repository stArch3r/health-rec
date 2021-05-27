<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\models\Doctors;
use frontend\models\Patient;
use frontend\models\Records;
/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\widgets\ListView;

$report = Records::find()->joinWith('patient')->all();
?>

<h1> Records page </h1>

<div class="list-history">
    <h4 class="mb-3"> Incident history </h4>
    <?= ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => 'listView',
    ]); ?>
</div>
