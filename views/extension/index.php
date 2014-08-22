<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\search\ExtensionSearch $searchModel
 */

$this->title = Yii::t('app', 'Extensions');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="extension-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Extension',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'extension_id',
            'num_ext',
            'tel_directo',
            'conmutador_id',
            'edificio_id',
            // 'confidencialidad',
            // 'funcionario_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
