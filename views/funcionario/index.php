<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\search\FuncionarioSearch $searchModel
 */

$this->title = Yii::t('app', 'Funcionarios');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="funcionario-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Funcionario',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'funionario_id',
            'nombre',
            'apellido',
            'dependencia_id',
            'subdependencia_id',
            // 'direccion_id',
            // 'departamento_id',
            // 'puesto_id',
            // 'correo_electronico',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
