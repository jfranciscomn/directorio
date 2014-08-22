<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Puesto;

/**
 * PuestoSearch represents the model behind the search form about `app\models\Puesto`.
 */
class PuestoSearch extends Puesto
{
    public function rules()
    {
        return [
            [['puesto_id', 'dependencia_id', 'subdependencia_id', 'direccion_id', 'departamento_id'], 'integer'],
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
        $query = Puesto::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'puesto_id' => $this->puesto_id,
            'dependencia_id' => $this->dependencia_id,
            'subdependencia_id' => $this->subdependencia_id,
            'direccion_id' => $this->direccion_id,
            'departamento_id' => $this->departamento_id,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre]);

        return $dataProvider;
    }
}
