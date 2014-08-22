<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\search\ConmutadorSearch $searchModel
 */

$this->title = Yii::t('app', 'Conmutadors');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="conmutador-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Conmutador',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'conmutador_id',
            'nombre',
            'marca',
            'modelo',
            'version',
            // 'dependencia_id',
            // 'subdependencia_id',
            // 'direccion_id',
            // 'departamento_id',
            // 'puesto_id',
            // 'numero',
            // 'direccion_ip',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
