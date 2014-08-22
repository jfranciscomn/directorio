<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Direccion $model
 */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
  'modelClass' => 'Direccion',
]) . $model->direccion_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Direccions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->direccion_id, 'url' => ['view', 'id' => $model->direccion_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="direccion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
