<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengguna".
 *
 * @property int $id
 * @property string $userid
 * @property string $passid
 * @property string $nama
 * @property string $status
 */
class basicPengguna extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengguna';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userid', 'passid', 'nama', 'status'], 'required'],
            [['userid', 'passid'], 'string', 'max' => 20],
            [['nama', 'status'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'userid' => 'Userid',
            'passid' => 'Passid',
            'nama' => 'Nama',
            'status' => 'Status',
        ];
    }
}
