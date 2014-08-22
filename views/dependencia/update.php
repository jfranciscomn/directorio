<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Dependencia $model
 */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
  'modelClass' => 'Dependencia',
]) . $model->dependencia_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dependencias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dependencia_id, 'url' => ['view', 'id' => $model->dependencia_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="dependencia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
