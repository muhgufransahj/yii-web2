<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property int $kode_barang
 * @property string $kode_jenis
 * @property string $nama_barang
 * @property string $harga_satuan
 * @property string $stok_barang
 * @property string $keterangan
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_jenis', 'nama_barang', 'harga_satuan', 'stok_barang', 'keterangan'], 'required'],
            [['kode_jenis', 'nama_barang', 'harga_satuan', 'stok_barang', 'keterangan'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_barang' => 'Kode Barang',
            'kode_jenis' => 'Kode Jenis',
            'nama_barang' => 'Nama Barang',
            'harga_satuan' => 'Harga Satuan',
            'stok_barang' => 'Stok Barang',
            'keterangan' => 'Keterangan',
        ];
    }

    public function getJenisbarang()
    {
        return $this->hasOne(basicJenisBarang::className(), ['kode_jenis' => 'kode_jenis']);
    }
}
