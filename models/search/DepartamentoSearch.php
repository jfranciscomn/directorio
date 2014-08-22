<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Departamento;

/**
 * DepartamentoSearch represents the model behind the search form about `app\models\Departamento`.
 */
class DepartamentoSearch extends Departamento
{
    public function rules()
    {
        return [
            [['departamento_id', 'dependencia_id', 'subdependencia_id', 'direccion_id'], 'integer'],
            [['nombre'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Departamento::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'departamento_id' => $this->departamento_id,
            'dependencia_id' => $this->dependencia_id,
            'subdependencia_id' => $this->subdependencia_id,
            'direccion_id' => $this->direccion_id,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre]);

        return $dataProvider;
    }
}
