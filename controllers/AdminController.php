<?php

namespace app\controllers;

use Yii;
use yii\data\Pagination;
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
    public function actionIndex() {
        $Event = new EventSearch();
        $DataEvent = $Event->find()->limit(5)->all();
        $TotalDataEvent = count($Event->find()->all());

        $UserData = new UsersSearch();
        $DataUser = $UserData->find()->where(['type' => null])->limit(5)->all();
        $TotalDataUser = count($DataUser);

        return $this->render('../dashboard/admin/index', [
            "DataEvent" => $DataEvent,
            "TotalDataEvent" => $TotalDataEvent,
            "DataUser" => $DataUser,
            "TotalDataUser" => $TotalDataUser,
        ]);
    }

    public function actionEvent() {
        echo 'event';
    }

    public function actionCreateEvent() {
        // $this->render()
    }
}
