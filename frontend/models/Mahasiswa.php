<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property string $nim
 * @property string $nama
 * @property string $tanggal_lahir
 * @property string $email
 * @property string $nama_bapak
 * @property string $nama_ibu
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'tanggal_lahir', 'email', 'nama_bapak', 'nama_ibu'], 'required'],
            [['tanggal_lahir'], 'safe'],
            [['nim'], 'string', 'max' => 16],
            [['nama', 'email', 'nama_bapak', 'nama_ibu'], 'string', 'max' => 32]
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
            'tanggal_lahir' => 'Tanggal Lahir',
            'email' => 'Email',
            'nama_bapak' => 'Nama Bapak',
            'nama_ibu' => 'Nama Ibu',
        ];
    }
}
