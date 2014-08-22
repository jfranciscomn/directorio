<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Funcionario;

/**
 * FuncionarioSearch represents the model behind the search form about `app\models\Funcionario`.
 */
class FuncionarioSearch extends Funcionario
{
    public function rules()
    {
        return [
            [['funionario_id', 'dependencia_id', 'subdependencia_id', 'direccion_id', 'departamento_id', 'puesto_id'], 'integer'],
            [['nombre', 'apellido', 'correo_electronico'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Funcionario::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'funionario_id' => $this->funionario_id,
            'dependencia_id' => $this->dependencia_id,
            'subdependencia_id' => $this->subdependencia_id,
            'direccion_id' => $this->direccion_id,
            'departamento_id' => $this->departamento_id,
            'puesto_id' => $this->puesto_id,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'apellido', $this->apellido])
            ->andFilterWhere(['like', 'correo_electronico', $this->correo_electronico]);

        return $dataProvider;
    }
}
