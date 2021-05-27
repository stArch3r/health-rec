<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <style>
      #top{
        margin-top: 0px;
      }
    </style>

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Health Manager</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

  
      <li class="nav-item active">
        <a class="nav-link" href="<?=Url::to(['site/index'])?>">Health <span class="sr-only">(current)</span></a>
      </li>
    
        <li class="nav-item">
        <a class="nav-link" href="<?=Url::to(['doctors/index'])?>">doctors </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?=Url::to(['site/list'])?>">patients reports</a>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="<?=Url::to(['patient/create'])?>"> new Patients</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?=Url::to(['patient/index'])?>"> Patient list</a>
        </li>
               
        <li class="nav-item">
        <a class="nav-link" href="<?=Url::to(['records/index'])?>"> make new records</a>
        </li>
      
      <?php if(Yii::$app->User->can('user'))
      {?>
        <li class="nav-item">
        <a class="nav-link" href="<?=Url::to(['records/create'])?>">make new report</a>
        </li>
        <?php }?>  
               
        <?php if(Yii::$app->User->can('admin')){?>     
        
          
        <li class="nav-item">
        <a class="nav-link" href="<?=Url::to(['records/index'])?>">manage reports</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?=Url::to(['patient/index'])?>">manage reports</a>
        </li>  
        <li class="nav-item">
        <a class="nav-link" href="<?=Url::to(['doctors/index'])?>">manage reports</a>
        </li>
        <?php }?>  
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          acccount
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="<?=Url::to(['site/login'])?>">login</a>
          <a class="dropdown-item" href="<?=Url::to(['site/signup'])?>">signup</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?=Url::to(['site/logout'])?>">log out</a>
        </div>
      </li>


    </ul>
    
    <form action="<?php echo Url::to(['/report/search']) ?>"
        class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search"
           name="keyword"
           value="<?php echo Yii::$app->request->get('keyword') ?>">
    <button class="btn btn-outline-success my-2 my-sm-0">Search</button>
  </form>

  </div>
</nav>



<!-- ?= $this->render(
            'left.php',
            
        )
        ?> -->
        <div class="wrap">
        <?= $content ?>
        </div>


        <footer>
        <footer class="site-footer rir">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h6>About</h6>
              <p class="text-justify">health  <i> Wants to help improve health services in Kenya</p>
            </div>
  
          <hr>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
           <a href="#">health checks </a>.
              </p>
            </div>
  
            <div class="col-md-4 col-sm-6 col-xs-12">

            </div>
          </div>
        </div>
            </section>
  </footer>

      
      


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>