<?php

namespace app\controllers;

use app\models\Mhs083;
use yii\data\ActiveDataProvider;
use Yii;

class Mhs083Controller extends  \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mhs083::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionCreate()
    {
        $mhs = new Mhs083;
        $mhs->no_induk_mahasiswa = '60200121083-'.rand(100,999);
        $mhs->nama_mahasiswa = 'Nur Khofifah Sirajuddin';
        $mhs->kelas = 'A';
        $mhs->status = 'Baru';
        if ($mhs->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
    }

    public function actionUpdate($id)
    {
        $mhs = Mhs083::findOne(['id' => $id]);
        if($mhs !== null){
            $mhs->kelas = 'C';
            $mhs->status = 'Update';
            $mhs->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $mhs = Mhs083::findOne(['id' => $id]);
        if($mhs->delete()){
            return $this->redirect(['index']);
        }
    }

    public function actionView($id){
        $mhs = Mhs083::findOne($id);
        return $this->render('view', ['mhs' => $mhs]);
    }
}