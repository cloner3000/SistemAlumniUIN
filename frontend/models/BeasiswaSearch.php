<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Beasiswa;

/**
 * BeasiswaSearch represents the model behind the search form about `frontend\models\Beasiswa`.
 */
class BeasiswaSearch extends Beasiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode'], 'integer'],
            [['nama', 'jenis', 'batas_waktu', 'syarat', 'proses_seleksi', 'publikasi'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Beasiswa::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'kode' => $this->kode,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'jenis', $this->jenis])
            ->andFilterWhere(['like', 'batas_waktu', $this->batas_waktu])
            ->andFilterWhere(['like', 'syarat', $this->syarat])
            ->andFilterWhere(['like', 'proses_seleksi', $this->proses_seleksi])
            ->andFilterWhere(['like', 'publikasi', $this->publikasi]);

        return $dataProvider;
    }
}
