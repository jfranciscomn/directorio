<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var app\models\Extension $model
 */

$this->title = $model->extension_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Extensions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="extension-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->extension_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->extension_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'extension_id',
            'num_ext',
            'tel_directo',
            'conmutador_id',
            'edificio_id',
            'confidencialidad',
            'funcionario_id',
        ],
    ]) ?>

</div>
