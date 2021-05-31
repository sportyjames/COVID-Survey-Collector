<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Covidsurvey */

$this->title = 'Update Covidsurvey: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Covidsurveys', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="covidsurvey-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="panel panel-success">
        <div class="panel-body">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>

</div>
