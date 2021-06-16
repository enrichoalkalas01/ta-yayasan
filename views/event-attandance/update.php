<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EventAttandance */

$this->title = 'Update Event Attandance: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Event Attandances', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="event-attandance-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
