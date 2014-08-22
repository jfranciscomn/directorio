<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\Funcionario $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="funcionario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => 256]) ?>

    <?= $form->field($model, 'apellido')->textInput(['maxlength' => 256]) ?>

    <?= $form->field($model, 'dependencia_id')->textInput() ?>

    <?= $form->field($model, 'puesto_id')->textInput() ?>

    <?= $form->field($model, 'subdependencia_id')->textInput() ?>

    <?= $form->field($model, 'direccion_id')->textInput() ?>

    <?= $form->field($model, 'departamento_id')->textInput() ?>

    <?= $form->field($model, 'correo_electronico')->textInput(['maxlength' => 256]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
