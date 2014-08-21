<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Estado $model
 */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
  'modelClass' => 'Estado',
]) . $model->estado_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Estados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->estado_id, 'url' => ['view', 'id' => $model->estado_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="estado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
