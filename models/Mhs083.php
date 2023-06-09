<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mhs083".
 *
 * @property int $id
 * @property string $no_induk_mahasiswa
 * @property string $nama_mahasiswa
 * @property string $kelas
 * @property string $status
 */
class Mhs083 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mhs083';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_induk_mahasiswa', 'nama_mahasiswa', 'kelas', 'status'], 'required'],
            [['no_induk_mahasiswa', 'nama_mahasiswa', 'kelas', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID083',
            'no_induk_mahasiswa' => 'No. Induk Mahasiswa083',
            'nama_mahasiswa' => 'Nama Mahasiswa083',
            'kelas' => 'Kelas083',
            'status' => 'Status083',
        ];
    }
}
