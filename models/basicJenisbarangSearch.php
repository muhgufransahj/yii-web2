<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\basicJenisbarang;

/**
 * basicJenisbarangSearch represents the model behind the search form of `app\models\basicJenisbarang`.
 */
class basicJenisbarangSearch extends basicJenisbarang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_jenis'], 'integer'],
            [['nama_jenis'], 'safe'],
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
        $query = basicJenisbarang::find();

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
            'kode_jenis' => $this->kode_jenis,
        ]);

        $query->andFilterWhere(['like', 'nama_jenis', $this->nama_jenis]);

        return $dataProvider;
    }
}
