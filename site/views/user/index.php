<?php
/* @var $this yii\web\View */
?>
<h1>User ID#<?=$id?></h1>

<p>
    <b>Balance: </b><?=$balance?>
</p>

<div>
    <?=\yii\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'label' => 'DateTime',
                'value' => function($value){
                    return date("d.m.Y H:i", strtotime($value["created_at"]));
                }
            ],
            'value'
        ],
        'layout' => '{items}'
    ])?>
</div>
