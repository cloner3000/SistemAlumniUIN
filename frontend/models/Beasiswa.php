<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "beasiswa".
 *
 * @property integer $kode
 * @property string $nama
 * @property string $jenis
 * @property string $batas_waktu
 * @property string $syarat
 * @property string $proses_seleksi
 * @property string $publikasi
 */
class Beasiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'beasiswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'jenis', 'batas_waktu', 'syarat', 'proses_seleksi', 'publikasi'], 'required'],
            [['syarat'], 'string'],
            [['nama'], 'string', 'max' => 128],
            [['jenis'], 'string', 'max' => 2],
            [['batas_waktu'], 'string', 'max' => 16],
            [['proses_seleksi'], 'string', 'max' => 256],
            [['publikasi'], 'string', 'max' => 4]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode' => 'Kode',
            'nama' => 'Nama',
            'jenis' => 'Jenis',
            'batas_waktu' => 'Batas Waktu',
            'syarat' => 'Syarat',
            'proses_seleksi' => 'Proses Seleksi',
            'publikasi' => 'Publikasi',
        ];
    }
}
