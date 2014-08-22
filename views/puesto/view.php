<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var app\models\Puesto $model
 */

$this->title = $model->puesto_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Puestos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="puesto-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->puesto_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->puesto_id], [
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
            'puesto_id',
            'nombre',
            'dependencia_id',
            'subdependencia_id',
            'direccion_id',
            'departamento_id',
        ],
    ]) ?>

</div>
