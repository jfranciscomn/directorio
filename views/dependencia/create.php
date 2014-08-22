<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Dependencia $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Dependencia',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dependencias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dependencia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
