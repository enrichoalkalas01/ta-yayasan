<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EventAttandance */

$this->title = 'Create Event Attandance';
$this->params['breadcrumbs'][] = ['label' => 'Event Attandances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-attandance-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
