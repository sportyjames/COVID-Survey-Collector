<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Covidsurvey */

$this->title = 'Create Covid survey';
$this->params['breadcrumbs'][] = ['label' => 'Covidsurveys', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="covidsurvey-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="panel panel-success">
        <div class="panel-body">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>

</div>
