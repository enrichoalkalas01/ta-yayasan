<?php

namespace app\controllers;

use Yii;
use app\models\UserAdmin;
use app\models\UserAdminSearch;
use app\models\Users;
use app\models\UsersSearch;
use app\models\Event;
use app\models\EventSearch;
use app\models\EventAttandance;
use app\models\EventAttandanceSearch;

class AdminController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionEvent() {
        echo 'event';
    }

    public function actionCreateEvent() {
        // $this->render()
    }
}
