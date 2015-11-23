<?php
use yii\widgets\ListView;
/* @var $this yii\web\View */

$this->title = 'Поздравь бабулю';
?>
<div class="jumbotron">
		<!-- <p><input type="radio" value="1"> pic 1 <input type="radio" value="2"> pic 2 <input type="radio" value="1"> pic 3</p> -->
		<p><textarea class='form-control message' rows='2' placeholder="Пожелания" required id="congrats"></textarea></p>
		<p><input type="text" class="form-control name" placeholder="Подпись" id="signature" /></p>
		<p><textarea class='form-control message' rows='3' placeholder="Адрес" required id="address"></textarea></p>
		<p><input type="email" class="form-control name" placeholder="Ваш email" required id="email"></p>
		<p><span class="btn btn-success btn-message" href="#" role="button"><span class='glyphicon glyphicon-envelope'></span> Поздравить бабулю</span></p>
		<p class="text-muted text-justify"><small>После отправки вашей заявки вы получите имейл уведомление с номером вашей заявки и номером яндекс кошелька на который необходимо перевести оплату за услуг указав номер заказа, после этого вы получите уведомления после отправления вашей открытки.</small></p>
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