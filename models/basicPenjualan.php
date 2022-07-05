<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penjualan".
 *
 * @property int $no_nota
 * @property string $tgl_nota
 * @property string $total_bayar
 * @property string $userid
 */
class basicPenjualan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penjualan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_nota', 'total_bayar', 'userid'], 'required'],
            [['tgl_nota'], 'safe'],
            [['total_bayar', 'userid'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_nota' => 'No Nota',
            'tgl_nota' => 'Tgl Nota',
            'total_bayar' => 'Total Bayar',
            'userid' => 'Userid',
        ];
    }

    public function getPengguna()
    {
        return $this->hasOne(basicPengguna::className(), ['userid' => 'userid']);
    }
}
