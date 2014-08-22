<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PlanMarcacion;

/**
 * PlanMarcacionSearch represents the model behind the search form about `app\models\PlanMarcacion`.
 */
class PlanMarcacionSearch extends PlanMarcacion
{
    public function rules()
    {
        return [
            [['plan_marcacion_id', 'ext_ini', 'ext_fin', 'conmutador_id'], 'integer'],
            [['nombre', 'estado'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = PlanMarcacion::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'plan_marcacion_id' => $this->plan_marcacion_id,
            'ext_ini' => $this->ext_ini,
            'ext_fin' => $this->ext_fin,
            'conmutador_id' => $this->conmutador_id,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'estado', $this->estado]);

        return $dataProvider;
    }
}
