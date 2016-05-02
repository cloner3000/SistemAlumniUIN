<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "alumni".
 *
 * @property string $nim
 * @property string $nama
 * @property string $jenis_kelamin
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $nama_ayah
 * @property string $nama_ibu
 * @property string $alamat
 * @property string $alt_kelurahan_desa
 * @property string $alt_kecamatan
 * @property string $alt_kab_kota
 * @property string $alt_provinsi
 * @property string $alt_negara
 * @property string $nomor_telpon
 * @property string $asal_sekolah
 * @property string $asl_skl_kelurahan_desa
 * @property string $asl_skl_kecamatan
 * @property string $asl_skl_kab_kota
 * @property string $asl_skl_provinsi
 * @property string $asl_skl_negara
 * @property string $fakultas
 * @property string $jurusan_prodi
 * @property string $kons
 * @property string $semester
 * @property string $tanggal_lulus
 * @property string $ipk
 * @property string $prediket
 * @property string $pembimbing
 * @property string $judul_skripsi
 * @property string $fakultas_nama
 * @property string $jurusan_ket
 * @property string $jurusan_inggris
 * @property string $jenjang_program
 */
class Alumni extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'alumni';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim'], 'required'],
            [['alamat', 'judul_skripsi'], 'string'],
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nim' => 'Nim',
            'nama' => 'Nama',
            'jenis_kelamin' => 'Jenis Kelamin',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'nama_ayah' => 'Nama Ayah',
            'nama_ibu' => 'Nama Ibu',
            'alamat' => 'Alamat',
            'alt_kelurahan_desa' => 'Alt Kelurahan Desa',
            'alt_kecamatan' => 'Alt Kecamatan',
            'alt_kab_kota' => 'Alt Kab Kota',
            'alt_provinsi' => 'Alt Provinsi',
            'alt_negara' => 'Alt Negara',
            'nomor_telpon' => 'Nomor Telpon',
            'asal_sekolah' => 'Asal Sekolah',
            'asl_skl_kelurahan_desa' => 'Asl Skl Kelurahan Desa',
            'asl_skl_kecamatan' => 'Asl Skl Kecamatan',
            'asl_skl_kab_kota' => 'Asl Skl Kab Kota',
            'asl_skl_provinsi' => 'Asl Skl Provinsi',
            'asl_skl_negara' => 'Asl Skl Negara',
            'fakultas' => 'Fakultas',
            'jurusan_prodi' => 'Jurusan Prodi',
            'kons' => 'Kons',
            'semester' => 'Semester',
            'tanggal_lulus' => 'Tanggal Lulus',
            'ipk' => 'Ipk',
            'prediket' => 'Prediket',
            'pembimbing' => 'Pembimbing',
            'judul_skripsi' => 'Judul Skripsi',
            'fakultas_nama' => 'Fakultas Nama',
            'jurusan_ket' => 'Jurusan Ket',
            'jurusan_inggris' => 'Jurusan Inggris',
            'jenjang_program' => 'Jenjang Program',
        ];
    }
}
