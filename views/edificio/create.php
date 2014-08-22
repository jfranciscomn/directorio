<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Edificio $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Edificio',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Edificios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="edificio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
