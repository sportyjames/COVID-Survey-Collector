<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>


    <h3 class="text text-center text-info">This web application will be asking users 
    to fill out a survey about COVID symptoms. Users need to signup and login first.
    Then they can create or view surveys.</h3>

    <div class=text-center>
    <p><a class="btn btn-lg btn-success" href="/covidsurvey/create">Start new Survey</a>
    <p><a class="btn btn-lg btn-success" href="/covidsurvey">View existing Surveys</a></p>
    </p>
    </div>

    <br>
    <br>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <?= Html::img('@web/3.jpg' , ['alt' => 'pic not found', 'style' => 'width: 100%; height: 600px']); ?>
        </div>

        <div class="item">
        <?= Html::img('@web/1.jpg' , ['alt' => 'pic not found', 'style' => 'width: 100%; height: 600px']); ?>
        </div>

        <div class="item">
        <?= Html::img('@web/2.jpg' , ['alt' => 'pic not found', 'style' => 'width: 100%; height: 600px']); ?>
        </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</div>
