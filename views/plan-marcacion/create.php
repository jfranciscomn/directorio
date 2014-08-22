<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\PlanMarcacion $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Plan Marcacion',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Plan Marcacions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plan-marcacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
