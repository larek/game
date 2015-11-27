<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\MessagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Messages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="messages-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Messages', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            'dateCreated',
            //'name',
            //'message:ntext',
            'email:ntext',
             'congrats:ntext',
             'signature:ntext',
             'address:ntext',
             'card',
             [
               'attribute' => 'link',
               'format' => 'raw',
               'value' => function($data){
                 return Html::a('<span class="glyphicon glyphicon-link"></span> Ссылка на заказ', ['/site/mycard', 'id' => $data->link],['class' => 'btn btn-default','target' => '_blank']);
               }
             ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
