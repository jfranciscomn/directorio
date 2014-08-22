<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\search\ExtensionSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="extension-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'extension_id') ?>

    <?= $form->field($model, 'num_ext') ?>

    <?= $form->field($model, 'tel_directo') ?>

    <?= $form->field($model, 'conmutador_id') ?>

    <?= $form->field($model, 'edificio_id') ?>

    <?php // echo $form->field($model, 'confidencialidad') ?>

    <?php // echo $form->field($model, 'funcionario_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
