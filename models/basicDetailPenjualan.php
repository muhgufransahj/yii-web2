<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detail_penjualan".
 *
 * @property int $no_nota
 * @property int $kode_barang
 * @property string $harga_jual
 * @property int $jumlah_jual
 * @property string $subtotal
 */
class basicDetailPenjualan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_penjualan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_barang', 'harga_jual', 'jumlah_jual', 'subtotal'], 'required'],
            [['kode_barang', 'jumlah_jual'], 'integer'],
            [['harga_jual', 'subtotal'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_nota' => 'No Nota',
            'kode_barang' => 'Kode Barang',
            'harga_jual' => 'Harga Jual',
            'jumlah_jual' => 'Jumlah Jual',
            'subtotal' => 'Subtotal',
        ];
    }

    public function getBarang()
    {
        return $this->hasOne(basicBarang::className(), ['kode_barang'=>'kode_barang']);
    }

    public function getPenjualan()
    {
        return $this->hasOne(basicPenjualan::className(), ['no_nota'=>'no_nota']);
    }
}
