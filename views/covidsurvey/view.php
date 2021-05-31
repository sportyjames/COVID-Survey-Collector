<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Covidsurvey */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Covidsurveys', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="covidsurvey-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p class="text-muted">
            <small>
                By: <b><?php echo $model->createdBy->username ?> </b>
            </small>
    </p>

    <?php if (!Yii::$app->user->isGuest && Yii::$app->user->id === $model->created_by): ?>
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php endif ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'firstname',
            'lastname',
            // 'fever',
            [
                'label'=>'Fever',
                'format'=>'raw',
                'value' => function($model) {return $model->fever == 1 ? 'Yes' : 'No';}
            ],
            // 'headache',
            [
                'label'=>'Headache',
                'format'=>'raw',
                'value' => function($model) {return $model->headache == 1 ? 'Yes' : 'No';}
            ],
            // 'cough',
            [
                'label'=>'Cough',
                'format'=>'raw',
                'value' => function($model) {return $model->cough == 1 ? 'Yes' : 'No';}
            ],
            // 'sorethroat',
            [
                'label'=>'Sorethroat',
                'format'=>'raw',
                'value' => function($model) {return $model->sorethroat == 1 ? 'Yes' : 'No';}
            ],
            // 'tasteloss',
            [
                'label'=>'Tasteloss',
                'format'=>'raw',
                'value' => function($model) {return $model->tasteloss == 1 ? 'Yes' : 'No';}
            ],
            // 'diarrhea',
            [
                'label'=>'Diarrhea',
                'format'=>'raw',
                'value' => function($model) {return $model->diarrhea == 1 ? 'Yes' : 'No';}
            ],
            'others',
        ],
    ]) ?>

</div>
