<?php
use yii\widgets\ListView;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="jumbotron">
		<p><input type="radio" value="1"> pic 1 <input type="radio" value="2"> pic 2 <input type="radio" value="1"> pic 3</p>
        <p><input type="text" class="form-control name" placeholder="Имя" /></p>
        <p><textarea class='form-control message' rows='3' placeholder="Пожелания"></textarea></p>
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
