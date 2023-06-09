<?php

namespace app\controllers;
use yii\data\ActiveDataProvider;
use app\models\Mahasiswa083;
use app\models\Profil083;
use yii\debug\models\timeline\DataProvider;

class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa083::find();
        $dataProvider = new ActiveDataProvider(['query' => $query]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionProfil()
    {
        $query = Profil083::find();
        $dataProvider = new ActiveDataProvider(['query' => $query]);
        return $this->render('profil', [
            'dataProvider' => $dataProvider
        ]);
    }

}
