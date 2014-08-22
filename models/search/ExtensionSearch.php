<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Extension;

/**
 * ExtensionSearch represents the model behind the search form about `app\models\Extension`.
 */
class ExtensionSearch extends Extension
{
    public function rules()
    {
        return [
            [['extension_id', 'conmutador_id', 'edificio_id', 'funcionario_id'], 'integer'],
            [['num_ext', 'tel_directo', 'confidencialidad'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Extension::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'extension_id' => $this->extension_id,
            'conmutador_id' => $this->conmutador_id,
            'edificio_id' => $this->edificio_id,
            'funcionario_id' => $this->funcionario_id,
        ]);

        $query->andFilterWhere(['like', 'num_ext', $this->num_ext])
            ->andFilterWhere(['like', 'tel_directo', $this->tel_directo])
            ->andFilterWhere(['like', 'confidencialidad', $this->confidencialidad]);

        return $dataProvider;
    }
}
