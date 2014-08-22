<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Conmutador $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Conmutador',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Conmutadors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="conmutador-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
