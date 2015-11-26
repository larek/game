<?php
use yii\widgets\ListView;
/* @var $this yii\web\View */

$this->title = 'Поздравь бабулю';
?>
<div class="jumbotron">
		<div class="cc-selector">
			<input id="card1" type="radio" name="cardture" value="1" id="card"/>
			<label class="col-xs-4 drinkcard-cc card1" for="card1">
				<img class="img-responsive" src="/img/card1.png" alt="">
			</label>
			<input id="card2" type="radio" name="cardture" value="2" id="card"/>
			<label class="col-xs-4 drinkcard-cc card2" for="card2">
				<img class="img-responsive" src="/img/card2.png" alt="">
			</label>
			<input id="card3" type="radio" name="cardture" value="3" id="card"/>
			<label class="col-xs-4 drinkcard-cc card3" for="card3">
				<img class="img-responsive" src="/img/card3.png" alt="">
			</label>
		</div>
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