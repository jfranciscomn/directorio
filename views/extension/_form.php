<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\Extension $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="extension-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'num_ext')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'conmutador_id')->textInput() ?>

    <?= $form->field($model, 'edificio_id')->textInput() ?>

    <?= $form->field($model, 'funcionario_id')->textInput() ?>

    <?= $form->field($model, 'tel_directo')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'confidencialidad')->textInput(['maxlength' => 45]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
