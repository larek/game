<?
$this->title = 'Моя открытка';
?>

<h1>Открытка №<?= $model->id?></h1>

<div class='row'>
  <div class='col-md-12'>
    <div class='alert alert-info'>
      Ваша открытка еще не отправлена. Для того, чтобы мы изотовили и сделали вашу открытку, оплатите ее немножко и подождите =)
    </div>
  </div>
</div>

<div class='row'>
  <div class='col-md-12'>
    <iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/embed/shop.xml?account=410011261162785&quickpay=shop&payment-type-choice=on&writer=seller&targets=Оплата открытки №<?= $model->id?>&targets-hint=&default-sum=100&button-text=01&successURL=http://<?= $_SERVER['HTTP_HOST'];?>/success" width="450" height="198"></iframe>
  </div>
</div>
