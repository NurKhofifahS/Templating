<?php
    use yii\grid\GridView;
?>

<?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'nim',
            'nama',
            'kelas',
            'jurusan'
        ]
    ])
?>