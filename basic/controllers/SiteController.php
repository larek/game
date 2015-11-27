<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Messages;
use app\models\Cards;
use yii\data\ActiveDataProvider;
use yii\helpers\Url;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
      
        $query = Messages::find()->orderBy(['dateCreated' => SORT_DESC]);
        $dataProvider = new ActiveDataProvider([
                'query' => $query,
            ]);

        $cards = Cards::find()->orderBy(['id'=>SORT_ASC])->all();
        return $this->render('index',[
                'dataProvider' => $dataProvider,
                'cards' => $cards,
            ]);
    }

    public function actionAnton()
    {
        $foo = Messages::find()->all();
        return $this->render('anton',[
            'foobar' => 'qwerty',
            'foo' => $foo
            ]);
    }

    public function actionAddmessage(){
        $date = date('Y-m-d H:i:s');
        $model = new Messages();
        $model->congrats = $_POST['congrats'];
        $model->signature = $_POST['signature'];
        $model->address = $_POST['address'];
        $model->email = $_POST['email'];
        $model->card = $_POST['card'];
        $model->link = md5($date.$_POST['email']);
        $model->dateCreated = $date;
        $model->save() ? $save = 'true' : $save = 'false';

        if($save){
          $card = Cards::findOne($_POST['card']);
          Yii::$app->mail->compose('layouts/sendmail',['id' => $model->id])
          ->setFrom(['post@larek.pro' => 'Babicard.ru'])
          ->setTo($_POST['email'])
          ->setSubject('Открытка бабушке №'. $model->id)
          ->attach($_SERVER['DOCUMENT_ROOT'].$card->image)
          ->send();
        }

        echo $save;
    }

    public function actionMycard($id){
      $model = Messages::find()->where(['link' => $id])->one();
      return $this->render('mycard',[
          'model' => $model,
        ]);
    }

    public function actionLogin()
    {
        $this->layout ='login';
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['/admin/default/index']);
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
}
