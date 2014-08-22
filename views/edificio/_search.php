<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\search\EdificioSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="edificio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'edificio_id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'estado_id') ?>

    <?= $form->field($model, 'municipio_id') ?>

    <?= $form->field($model, 'ubicacion') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
