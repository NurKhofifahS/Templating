<?php

use app\models\Profil083;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActionDataProvider $dataProvider */

?>
<div class="mahasiswa-083-index">

<h1><?= Html::encode($this->title) ?></h1>

<p>
    <?= Html::button('Mahasiswa Baru', ['class' => 'btn btn-primary']) ?>
</p>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'id',
        'id_mahasiswa',
        'foto_profil',

        [
            'class' => ActionColumn::className(),
            'urlCreator' => function ($action, Profil083 $model, $key, $index, $column){
                return Url::toRoute([$action, 'id' => $model->id]);
            }
        ],
    ],
]); ?>

</div>