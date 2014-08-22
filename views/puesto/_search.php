<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\search\PuestoSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="puesto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'puesto_id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'dependencia_id') ?>

    <?= $form->field($model, 'subdependencia_id') ?>

    <?= $form->field($model, 'direccion_id') ?>

    <?php // echo $form->field($model, 'departamento_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
