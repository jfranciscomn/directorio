<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Municipio $model
 */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
  'modelClass' => 'Municipio',
]) . $model->municipio_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Municipios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->municipio_id, 'url' => ['view', 'id' => $model->municipio_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="municipio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
