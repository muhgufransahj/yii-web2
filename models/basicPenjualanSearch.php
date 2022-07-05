<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\basicPenjualan;

/**
 * basicPenjualanSearch represents the model behind the search form of `app\models\basicPenjualan`.
 */
class basicPenjualanSearch extends basicPenjualan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_nota'], 'integer'],
            [['tgl_nota', 'total_bayar', 'userid'], 'safe'],
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
        $query = basicPenjualan::find();

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
            'no_nota' => $this->no_nota,
            'tgl_nota' => $this->tgl_nota,
        ]);

        $query->andFilterWhere(['like', 'total_bayar', $this->total_bayar])
            ->andFilterWhere(['like', 'userid', $this->userid]);

        return $dataProvider;
    }
}
