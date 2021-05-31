<?php

/* @var $model \app\models\Covidsurvey */

use PharIo\Manifest\Url;
use yii\helpers\Html;

?>

<div>
    <a href="<?php echo \yii\helpers\Url::to(['/covidsurvey/view', 'id' => $model->id]) ?>">
        <h3> 
            <?php echo \yii\helpers\Html::encode($model->firstname) ?>
            <?php echo \yii\helpers\Html::encode($model->lastname) ?>
        </h3>
    </a>

</div>