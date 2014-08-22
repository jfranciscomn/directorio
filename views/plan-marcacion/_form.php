<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\PlanMarcacion $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="plan-marcacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => 256]) ?>

    <?= $form->field($model, 'ext_ini')->textInput() ?>

    <?= $form->field($model, 'ext_fin')->textInput() ?>

    <?= $form->field($model, 'conmutador_id')->textInput() ?>

    <?= $form->field($model, 'estado')->textInput(['maxlength' => 128]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
