<?php

namespace app\controllers;

use app\models\Obat083;
use yii\data\ActiveDataProvider;

class Obat083Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Obat083::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

}
