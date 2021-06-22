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

    public function actionDetailEvent() {
        // Get Id Event From Query Link
        $EventId = Yii::$app->getRequest()->getQueryParam('id');

        // Get Data Event
        $Event = new EventSearch();
        $DataEvent = $Event->find()->where(['id' => $EventId])->one();
        
        // Get Event Attandance
        $EventAttandance = new EventAttandanceSearch();
        $DataAttandance = $EventAttandance->find()->where(['event_id' => $EventId])->all();
        
        // Get Users By Event Attandance
        $DataUser = array();
        $User = new UsersSearch();
        for ( $i = 0; $i < count($DataAttandance); $i++ ) {
            $DataUser[$i] = $User->find()->where(['id' => $DataAttandance[$i]->users_id])->one();
        }

        return $this->render('../dashboard/admin/event-detail', [
            "DataEvent" => $DataEvent,
            "DataUser" => $DataUser,
            "TotalDataUser" => count($DataUser),
        ]);
    }
}
