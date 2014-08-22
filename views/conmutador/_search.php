<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\search\ConmutadorSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="conmutador-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'conmutador_id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'marca') ?>

    <?= $form->field($model, 'modelo') ?>

    <?= $form->field($model, 'version') ?>

    <?php // echo $form->field($model, 'dependencia_id') ?>

    <?php // echo $form->field($model, 'subdependencia_id') ?>

    <?php // echo $form->field($model, 'direccion_id') ?>

    <?php // echo $form->field($model, 'departamento_id') ?>

    <?php // echo $form->field($model, 'puesto_id') ?>

    <?php // echo $form->field($model, 'numero') ?>

    <?php // echo $form->field($model, 'direccion_ip') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
