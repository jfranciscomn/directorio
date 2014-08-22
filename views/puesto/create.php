<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Puesto $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Puesto',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Puestos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="puesto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
