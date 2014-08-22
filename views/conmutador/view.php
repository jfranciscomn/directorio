<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var app\models\Conmutador $model
 */

$this->title = $model->conmutador_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Conmutadors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="conmutador-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->conmutador_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->conmutador_id], [
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
            'conmutador_id',
            'nombre',
            'marca',
            'modelo',
            'version',
            'dependencia_id',
            'subdependencia_id',
            'direccion_id',
            'departamento_id',
            'puesto_id',
            'numero',
            'direccion_ip',
        ],
    ]) ?>

</div>
