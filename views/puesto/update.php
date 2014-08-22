<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Puesto $model
 */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
  'modelClass' => 'Puesto',
]) . $model->puesto_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Puestos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->puesto_id, 'url' => ['view', 'id' => $model->puesto_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="puesto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
