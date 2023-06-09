<?php

use yii\grid\GridView;

$this->title = 'Data Obat';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title ?></h1>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns'=> [
        ['class' => 'yii\grid\SerialColumn'],
        'kode_obat',
        'harga',
        'stok_obat',
    ],
]); ?>