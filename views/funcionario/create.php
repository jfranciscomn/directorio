<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Funcionario $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Funcionario',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Funcionarios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="funcionario-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
