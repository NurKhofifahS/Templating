<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "krs".
 *
 * @property string|null $km
 * @property string|null $matkul
 * @property string|null $sks
 */
class Krs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'krs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['km'], 'string', 'max' => 6],
            [['matkul'], 'string', 'max' => 15],
            [['sks'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'km' => 'Km',
            'matkul' => 'Matkul',
            'sks' => 'Sks',
        ];
    }
}
