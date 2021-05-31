<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CovidsurveySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Covid Surveys';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="covidsurvey-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h4>Filter</h4>
        </div>
        <div class="panel-body">
        <?php echo $this->render('_search', ['model' => $searchModel]); ?>
        </div>
    </div>

    

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        // 'itemView' => function ($model, $key, $index, $widget) {
        //     return Html::a(Html::encode($model->firstname), Html::encode($model->lastname),['view', 'id' => $model->id]);
        // },
        'itemView' => '_covidsurvey_item'
    ]) ?>


</div>
