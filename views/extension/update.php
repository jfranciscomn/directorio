<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Extension $model
 */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
  'modelClass' => 'Extension',
]) . $model->extension_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Extensions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->extension_id, 'url' => ['view', 'id' => $model->extension_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="extension-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
