<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Funcionario $model
 */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
  'modelClass' => 'Funcionario',
]) . $model->funionario_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Funcionarios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->funionario_id, 'url' => ['view', 'id' => $model->funionario_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="funcionario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
