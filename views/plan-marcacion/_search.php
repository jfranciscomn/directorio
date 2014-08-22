<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\search\PlanMarcacionSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="plan-marcacion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'plan_marcacion_id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'ext_ini') ?>

    <?= $form->field($model, 'ext_fin') ?>

    <?= $form->field($model, 'conmutador_id') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
