<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Komentar;

/**
 * KomentarSearch represents the model behind the search form about `frontend\models\Komentar`.
 */
class KomentarSearch extends Komentar
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode', 'kode_berita', 'komentar', 'tanggal', 'jam', 'pengomentar'], 'integer'],
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
        $query = Komentar::find();

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
            'kode_berita' => $this->kode_berita,
            'komentar' => $this->komentar,
            'tanggal' => $this->tanggal,
            'jam' => $this->jam,
            'pengomentar' => $this->pengomentar,
        ]);

        return $dataProvider;
    }
}
