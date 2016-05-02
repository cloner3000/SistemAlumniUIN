<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Berita;

/**
 * BeritaSearch represents the model behind the search form about `frontend\models\Berita`.
 */
class BeritaSearch extends Berita
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode'], 'integer'],
            [['judul', 'isi', 'penulis', 'tanggal_post', 'jam_post', 'kategori', 'gambar'], 'safe'],
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
        $query = Berita::find();

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
            'kode' => $this->kode,
        ]);

        $query->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'isi', $this->isi])
            ->andFilterWhere(['like', 'penulis', $this->penulis])
            ->andFilterWhere(['like', 'tanggal_post', $this->tanggal_post])
            ->andFilterWhere(['like', 'jam_post', $this->jam_post])
            ->andFilterWhere(['like', 'kategori', $this->kategori])
            ->andFilterWhere(['like', 'gambar', $this->gambar]);

        return $dataProvider;
    }
}
