<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\PlanMarcacion $model
 */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
  'modelClass' => 'Plan Marcacion',
]) . $model->plan_marcacion_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Plan Marcacions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->plan_marcacion_id, 'url' => ['view', 'id' => $model->plan_marcacion_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="plan-marcacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
