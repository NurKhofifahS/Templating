<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_083".
 *
 * @property int $id
 * @property int $nim
 * @property string $nama
 * @property string $kelas
 * @property string $jurusan
 *
 * @property Profil083 $profil083
 */
class Mahasiswa083 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa_083';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'kelas', 'jurusan'], 'required'],
            [['nim'], 'integer'],
            [['nama'], 'string', 'max' => 50],
            [['kelas'], 'string', 'max' => 2],
            [['jurusan'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'nama' => 'Nama',
            'kelas' => 'Kelas',
            'jurusan' => 'Jurusan',
        ];
    }
    public function getProfil083(){
        // same as above
        return $this->hasOne(Profil083::class, ['id' => 'id']);
    }
}
