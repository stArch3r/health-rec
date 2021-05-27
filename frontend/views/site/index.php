<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\models\Doctors;
use frontend\models\Patient;
use frontend\models\Records;
use yii\widgets\Pjax;
use yii\grid\GridView;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';

$total = Patient::find()->asArray()->all();
$doc = Doctors::find()->asArray()->all();
$recs = Records::find()->asArray()->all();


?>

  
<?php

/* @var $this yii\web\View */


$this->title = 'My Yii Application';
?>
<div class="site-index">
    <section class="stats">
        <div class="container">
            <p> Welcome, user </p>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="card shadow py-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                <img src="./assets/picha/user.jpg" class="img-fluid">
                                </div>
                                <div class="col-7 pt-4">
                                    <h5 class="card-title"> Patients </h5>
                                    <h6 class="card-text"> Total <?= count($total)?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card shadow py-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                <img src="./assets/picha/doc.jpg" class="img-fluid">
                                </div>
                                <div class="col-7 py-2">
                                    <h5 class="card-text"> Doctors</h5>
                                    <h6 class="card-text">  Total <?= count($doc)?></h6>
                                    <h6 class="card-text">our care givers </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card shadow py-1">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                <img src="./assets/picha/record.png" class="img-fluid">
                                </div>
                                <div class="col-7 pt-4">
                                    <h5 class="card-title"> health records  </h5>
                                    <h6 class="card-text"> Total <?= count($recs)?>  </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="row " style="margin-top:7em">
  <div class="container">
    <div class="row">
      <div class="col-md-6">

      <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./assets/picha/doc.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Health Plus</h5>
    <p class="card-text"> Our care givers use the at most advanced methods to treat our patients</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">World class care </li>
    <li class="list-group-item">all major insurance  cards</li>
    <li class="list-group-item">Latest Equipments </li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Nairobi</a>
    <a href="#" class="card-link">Here and Now</a>
  </div>
</div>
      </div>
  <div class="col-md-6">
  <?php pjax:: begin(); ?>
    <?= GridView::widget([
        'dataProvider'=> $dataProvider,
     
        'columns'=>[
            'patientId',
            'recordId',
            'doctorId',
              'diagnosis',
              'date',

              
              

        ]
        

    ])?>
    <?php pjax::end(); ?>
  </div>
   
  </div>
</div>