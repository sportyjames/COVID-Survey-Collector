<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CovidsurveySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="covidsurvey-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>


    <?= $form->field($model, 'fever')->checkBox(['selected' => $model->fever])?>

    <?= $form->field($model, 'headache')->checkBox(['selected' => $model->headache])?>

    <?= $form->field($model, 'cough')->checkBox(['selected' => $model->cough])?>

    <?= $form->field($model, 'sorethroat')->checkBox(['selected' => $model->sorethroat])?>

    <?= $form->field($model, 'tasteloss')->checkBox(['selected' => $model->tasteloss])?>

    <?= $form->field($model, 'diarrhea')->checkBox(['selected' => $model->diarrhea])?>

    <?= $form->field($model, 'others')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
