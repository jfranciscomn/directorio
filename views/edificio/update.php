<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Edificio $model
 */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
  'modelClass' => 'Edificio',
]) . $model->edificio_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Edificios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->edificio_id, 'url' => ['view', 'id' => $model->edificio_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="edificio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
