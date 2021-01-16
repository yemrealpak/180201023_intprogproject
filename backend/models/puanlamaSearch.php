<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\puanlama;

/**
 * SikayetekleSearch represents the model behind the search form of `backend\models\Sikayetekle`.
 */
class puanlamaSearch extends puanlama
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id','puanlama_tel'], 'integer'],
            [['puanlama_name','puanlama_surname', 'puanlama_sikayet_yeri','puanlama_sikayet_durum','puanlama_sikayet_tip','puanlama_email'],'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = puanlama::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'puanlama_name' => $this->puanlama_name,
            'puanlama_surname' => $this->puanlama_surname,
            'puanlama_ariza_tip' => $this->puanlama_sikayet_tip,
            'puanlama_ariza_yeri' => $this->puanlama_sikayet_yeri,
            'puanlama_ariza_durum' => $this->puanlama_sikayet_durum,
            'puanlama_tel' => $this->puanlama_tel,
            'puanlama_email' => $this->puanlama_email,
        ]);

        return $dataProvider;
    }
}
