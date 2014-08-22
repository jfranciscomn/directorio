<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\search\PuestoSearch $searchModel
 */

$this->title = Yii::t('app', 'Puestos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="puesto-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Puesto',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'puesto_id',
            'nombre',
            'dependencia_id',
            'subdependencia_id',
            'direccion_id',
            // 'departamento_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
