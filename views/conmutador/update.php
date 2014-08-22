<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Conmutador $model
 */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
  'modelClass' => 'Conmutador',
]) . $model->conmutador_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Conmutadors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->conmutador_id, 'url' => ['view', 'id' => $model->conmutador_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="conmutador-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
