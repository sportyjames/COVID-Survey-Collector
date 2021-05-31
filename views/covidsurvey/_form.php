<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Covidsurvey */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="covidsurvey-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fever')->checkBox(['selected' => $model->fever])?>

    <?= $form->field($model, 'headache')->checkBox(['selected' => $model->headache])?>

    <?= $form->field($model, 'cough')->checkBox(['selected' => $model->cough])?>

    <?= $form->field($model, 'sorethroat')->checkBox(['selected' => $model->sorethroat])?>

    <?= $form->field($model, 'tasteloss')->checkBox(['selected' => $model->tasteloss])?>

    <?= $form->field($model, 'diarrhea')->checkBox(['selected' => $model->diarrhea])?>

    <?= $form->field($model, 'others')->textInput(['maxlength' => true]) ?>


    <?php if (!Yii::$app->user->isGuest): ?>
    <div class="form-group">
        <?= Html::submitButton('Create', ['class' => 'btn btn-success']) ?>
    </div>
    <?php endif; ?>

    <?php ActiveForm::end(); ?>

</div>
