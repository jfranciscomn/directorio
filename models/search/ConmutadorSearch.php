<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Conmutador;

/**
 * ConmutadorSearch represents the model behind the search form about `app\models\Conmutador`.
 */
class ConmutadorSearch extends Conmutador
{
    public function rules()
    {
        return [
            [['conmutador_id', 'dependencia_id', 'subdependencia_id', 'direccion_id', 'departamento_id', 'puesto_id'], 'integer'],
            [['nombre', 'marca', 'modelo', 'version', 'numero', 'direccion_ip'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Conmutador::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'conmutador_id' => $this->conmutador_id,
            'dependencia_id' => $this->dependencia_id,
            'subdependencia_id' => $this->subdependencia_id,
            'direccion_id' => $this->direccion_id,
            'departamento_id' => $this->departamento_id,
            'puesto_id' => $this->puesto_id,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'marca', $this->marca])
            ->andFilterWhere(['like', 'modelo', $this->modelo])
            ->andFilterWhere(['like', 'version', $this->version])
            ->andFilterWhere(['like', 'numero', $this->numero])
            ->andFilterWhere(['like', 'direccion_ip', $this->direccion_ip]);

        return $dataProvider;
    }
}
