<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\web\Session;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\UserAdmin;
use app\models\UserAdminSearch;
use app\models\EventSearch;
use app\models\Event;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
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

    /**
     * {@inheritdoc}
     */
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        // Check Login Status
        $session = Yii::$app->session;
        $DataUser = $session->get('UserData');
        if ( $DataUser == Null ) {
            return $this->redirect('/index.php?r=user-custom/login');
            // return $this->render('index');
        } else {
            return $this->render('index');
        }
        
    }

    public function actionLoginAdmin() {
        // Check Login Status
        $session = Yii::$app->session;
        $DataUser = $session->get('DataUser');
        if ( $DataUser == Null ) {
            return $this->redirect('/index.php?r=user-custom/login-admin');
            // return $this->render('index');
        } else {
            return $this->render('index');
        }
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
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

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionRegisterTester() {
        return $this->render('../login/register');
    }

    public function actionEvent() {
        $Events = new EventSearch();
        return $this->render('event', ["DataEvents" => $Events->find()->all()]);
    }

    public function actionEventDetail() {
        $EventDetail = new EventSearch();
        $Data = $EventDetail->find()->where(['id' => Yii::$app->request->getQueryParam('id')])->one();
        return $this->render('event-detail', ["DataEventDetail" => $Data]);
    }
}
