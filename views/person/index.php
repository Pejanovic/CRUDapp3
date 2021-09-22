<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Person */


$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Persons'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="event-view">

    <h1><?= Html::encode($this->title) ?></h1>

  

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'lastname',
            'birthdate',
            'birthplace',
            'education',
            'privatelife',
            'work',
            'achievements',
        ],
    ]) ?>


