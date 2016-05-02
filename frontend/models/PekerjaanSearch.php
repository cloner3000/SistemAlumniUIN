<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Pekerjaan;

/**
 * PekerjaanSearch represents the model behind the search form about `frontend\models\Pekerjaan`.
 */
class PekerjaanSearch extends Pekerjaan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nim', 'tempat_kerja', 'status_tempat_kerja', 'alamat', 'kode_pos', 'kelurahan', 'kecamatan', 'kabkota', 'provinsi', 'negara', 'telpon', 'email', 'tanggal_masuk', 'tanggal_keluar', 'jabatan', 'status', 'gaji'], 'safe'],
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
        $query = Pekerjaan::find();

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
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'nim', $this->nim])
            ->andFilterWhere(['like', 'tempat_kerja', $this->tempat_kerja])
            ->andFilterWhere(['like', 'status_tempat_kerja', $this->status_tempat_kerja])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'kode_pos', $this->kode_pos])
            ->andFilterWhere(['like', 'kelurahan', $this->kelurahan])
            ->andFilterWhere(['like', 'kecamatan', $this->kecamatan])
            ->andFilterWhere(['like', 'kabkota', $this->kabkota])
            ->andFilterWhere(['like', 'provinsi', $this->provinsi])
            ->andFilterWhere(['like', 'negara', $this->negara])
            ->andFilterWhere(['like', 'telpon', $this->telpon])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'tanggal_masuk', $this->tanggal_masuk])
            ->andFilterWhere(['like', 'tanggal_keluar', $this->tanggal_keluar])
            ->andFilterWhere(['like', 'jabatan', $this->jabatan])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'gaji', $this->gaji]);

        return $dataProvider;
    }
}
