<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "komentar".
 *
 * @property integer $kode
 * @property integer $kode_berita
 * @property integer $komentar
 * @property integer $tanggal
 * @property integer $jam
 * @property integer $pengomentar
 */
class komentar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'komentar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_berita', 'komentar', 'tanggal', 'jam', 'pengomentar'], 'required'], 
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode' => 'Kode',
            'kode_berita' => 'Kode Berita',
            'komentar' => 'Komentar',
            'tanggal' => 'Tanggal',
            'jam' => 'Jam',
            'pengomentar' => 'Pengomentar',
        ];
    }
}
