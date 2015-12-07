<?php
use yii\widgets\ListView;
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Поздравь бабулю';
?>

<div class="jumbotron">
		<div class="cc-selector">
			<?
				foreach($cards as $item){
					echo Html::input('radio','cardture',$item->id,['id' => 'card'.$item->id]);
					echo Html::tag('label',Html::img($item->image,['class' => 'img-responsive']),['class' => 'col-xs-4 drinkcard-cc card'.$item->id, 'for' => 'card'.$item->id ]);
				}
			?>
		</div>
		<p><textarea class='form-control message' rows='2' placeholder="Пожелания" id="congrats"></textarea></p>
		<p><input type="text" class="form-control name" placeholder="Подпись" id="signature" /></p>
		<p><textarea class='form-control message' rows='3' placeholder="Адрес" id="address"></textarea></p>
		<p><input type="email" class="form-control name" placeholder="Ваш email" id="email"></p>
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

<div class="overlay">
	<p>hi mom</p>
	<div class="feedback">
		<div class="close-btn"><span class="glyphicon glyphicon-remove"></span></div>
		<p class="lead">Спасибо за заказ.</p>
		<p>Вам на почту отправлено письмо.</p>
		<div class="graphic"></div>
	</div>
</div>

</ul>
</div>
