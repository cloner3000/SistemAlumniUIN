<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Alumni;

/**
 * AlumniSearch represents the model behind the search form about `frontend\models\Alumni`.
 */
class AlumniSearch extends Alumni
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'nama_ayah', 'nama_ibu', 'alamat', 'alt_kelurahan_desa', 'alt_kecamatan', 'alt_kab_kota', 'alt_provinsi', 'alt_negara', 'nomor_telpon', 'asal_sekolah', 'asl_skl_kelurahan_desa', 'asl_skl_kecamatan', 'asl_skl_kab_kota', 'asl_skl_provinsi', 'asl_skl_negara', 'fakultas', 'jurusan_prodi', 'kons', 'semester', 'tanggal_lulus', 'ipk', 'prediket', 'pembimbing', 'judul_skripsi', 'fakultas_nama', 'jurusan_ket', 'jurusan_inggris', 'jenjang_program'], 'safe'],
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
        $query = Alumni::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'nim', $this->nim])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'tanggal_lahir', $this->tanggal_lahir])
            ->andFilterWhere(['like', 'nama_ayah', $this->nama_ayah])
            ->andFilterWhere(['like', 'nama_ibu', $this->nama_ibu])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'alt_kelurahan_desa', $this->alt_kelurahan_desa])
            ->andFilterWhere(['like', 'alt_kecamatan', $this->alt_kecamatan])
            ->andFilterWhere(['like', 'alt_kab_kota', $this->alt_kab_kota])
            ->andFilterWhere(['like', 'alt_provinsi', $this->alt_provinsi])
            ->andFilterWhere(['like', 'alt_negara', $this->alt_negara])
            ->andFilterWhere(['like', 'nomor_telpon', $this->nomor_telpon])
            ->andFilterWhere(['like', 'asal_sekolah', $this->asal_sekolah])
            ->andFilterWhere(['like', 'asl_skl_kelurahan_desa', $this->asl_skl_kelurahan_desa])
            ->andFilterWhere(['like', 'asl_skl_kecamatan', $this->asl_skl_kecamatan])
            ->andFilterWhere(['like', 'asl_skl_kab_kota', $this->asl_skl_kab_kota])
            ->andFilterWhere(['like', 'asl_skl_provinsi', $this->asl_skl_provinsi])
            ->andFilterWhere(['like', 'asl_skl_negara', $this->asl_skl_negara])
            ->andFilterWhere(['like', 'fakultas', $this->fakultas])
            ->andFilterWhere(['like', 'jurusan_prodi', $this->jurusan_prodi])
            ->andFilterWhere(['like', 'kons', $this->kons])
            ->andFilterWhere(['like', 'semester', $this->semester])
            ->andFilterWhere(['like', 'tanggal_lulus', $this->tanggal_lulus])
            ->andFilterWhere(['like', 'ipk', $this->ipk])
            ->andFilterWhere(['like', 'prediket', $this->prediket])
            ->andFilterWhere(['like', 'pembimbing', $this->pembimbing])
            ->andFilterWhere(['like', 'judul_skripsi', $this->judul_skripsi])
            ->andFilterWhere(['like', 'fakultas_nama', $this->fakultas_nama])
            ->andFilterWhere(['like', 'jurusan_ket', $this->jurusan_ket])
            ->andFilterWhere(['like', 'jurusan_inggris', $this->jurusan_inggris])
            ->andFilterWhere(['like', 'jenjang_program', $this->jenjang_program]);

        return $dataProvider;
    }
}
