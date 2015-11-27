<?
use app\models\Messages;
use yii\helpers\Html;
use yii\helpers\Url;
?>

<?
$model = Messages::findOne($id);
?>
<p>Спасибо за то, что воспользовались нашим сервисом</p>
<p>Для тог, чтобы мы отправили вашу открытку вам надо оплатить наши услуги</p>
<p>Оплатить и получить информацию по вашему заказу можно по этой ссылке - <?= Html::a('Информация по вашему заказу',"http://".$_SERVER['HTTP_HOST'].Url::to(['site/mycard', 'id' => $model->link]));?></p>
