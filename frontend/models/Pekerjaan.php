<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pekerjaan".
 *
 * @property string $nim
 * @property string $tempat_kerja
 * @property string $status_tempat_kerja
 * @property string $alamat
 * @property string $kode_pos
 * @property string $kelurahan
 * @property string $kecamatan
 * @property string $kabkota
 * @property string $provinsi
 * @property string $negara
 * @property string $telpon
 * @property string $email
 * @property string $tanggal_masuk
 * @property string $tanggal_keluar
 * @property string $jabatan
 * @property string $status
 * @property string $gaji
 */
class Pekerjaan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pekerjaan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim', 'tempat_kerja', 'status_tempat_kerja', 'alamat', 'kode_pos', 'kelurahan', 'kecamatan', 'kabkota', 'provinsi', 'negara', 'telpon', 'email', 'tanggal_masuk', 'tanggal_keluar', 'jabatan', 'status', 'gaji'], 'required'],
            [['nim', 'status_tempat_kerja', 'kode_pos', 'telpon', 'tanggal_masuk', 'tanggal_keluar', 'gaji'], 'string', 'max' => 16],
            [['tempat_kerja', 'kelurahan', 'kecamatan', 'kabkota', 'provinsi', 'negara', 'jabatan'], 'string', 'max' => 64],
            [['alamat', 'email', 'status'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nim' => 'Nim',
            'tempat_kerja' => 'Tempat Kerja',
            'status_tempat_kerja' => 'Status Tempat Kerja',
            'alamat' => 'Alamat',
            'kode_pos' => 'Kode Pos',
            'kelurahan' => 'Kelurahan',
            'kecamatan' => 'Kecamatan',
            'kabkota' => 'Kabkota',
            'provinsi' => 'Provinsi',
            'negara' => 'Negara',
            'telpon' => 'Telpon',
            'email' => 'Email',
            'tanggal_masuk' => 'Tanggal Masuk',
            'tanggal_keluar' => 'Tanggal Keluar',
            'jabatan' => 'Jabatan',
            'status' => 'Status',
            'gaji' => 'Gaji',
        ];
    }
}
