<?php
use yii\widgets\ListView;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="jumbotron">
        <p><input type="text" class="form-control name" placeholder="Имя" /></p>
        <p><textarea class='form-control message' rows='3' placeholder="Сообщение"></textarea></p>
        <p><span class="btn btn-success btn-message" href="#" role="button"><span class='glyphicon glyphicon-envelope'></span> Оставить запись</span></p>
</div>

<div class="row marketing">
<ul class="media-list">  
  <?= ListView::widget([
      'dataProvider' => $dataProvider,
      'itemView' => '_item',
      'summary' => false,
  ]);?>


</ul>
</div>
