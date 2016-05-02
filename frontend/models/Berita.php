<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "berita".
 *
 * @property integer $kode
 * @property string $judul
 * @property string $isi
 * @property string $penulis
 * @property string $tanggal_post
 * @property string $jam_post
 * @property string $kategori
 * @property string $gambar
 */
class Berita extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'berita';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judul', 'isi', 'penulis', 'tanggal_post', 'jam_post', 'kategori'], 'required'],
            [['isi'], 'string'],
            [['judul'], 'string', 'max' => 256],
            [['penulis'], 'string', 'max' => 32],
            [['tanggal_post', 'jam_post', 'kategori'], 'string', 'max' => 16],
          //  [['gambar'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode' => 'Kode',
            'judul' => 'Judul',
            'isi' => 'Isi',
            'penulis' => 'Penulis',
            'tanggal_post' => 'Tanggal Post',
            'jam_post' => 'Jam Post',
            'kategori' => 'Kategori',
            'gambar' => 'Gambar',
        ];
    }

    public function getRelativeSendingTime()
    {
        return Yii::$app->formatter->asRelativeTime(new \DateTime($this->tanggal_post.' '.$this->jam_post));
    }
}
