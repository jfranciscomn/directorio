<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Edificio;

/**
 * EdificioSearch represents the model behind the search form about `app\models\Edificio`.
 */
class EdificioSearch extends Edificio
{
    public function rules()
    {
        return [
            [['edificio_id', 'estado_id', 'municipio_id'], 'integer'],
            [['nombre', 'ubicacion'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Edificio::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'edificio_id' => $this->edificio_id,
            'estado_id' => $this->estado_id,
            'municipio_id' => $this->municipio_id,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'ubicacion', $this->ubicacion]);

        return $dataProvider;
    }
}
