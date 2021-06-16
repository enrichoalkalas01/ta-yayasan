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

class DashboardController extends \yii\web\Controller
{
    public function actionIndex() {
        $DataUser = Yii::$app->session->get('UserData');
        if ( !empty($DataUser->type) ) {
            return $this->render('../dashboard/index', [
                "DataEvent" => null,
            ]);
        } else {
            $UserEvent = new EventSearch();
            $UserJoin = new EventAttandanceSearch();
            $JoinData = $UserJoin->find()->where(['users_id' => $DataUser->id])->limit(5)->all();
            $TotalDataEvent = count($UserJoin->find()->where(['users_id' => $DataUser->id])->all());
            $DataEvent = [];
            for( $i = 0; $i < count($JoinData); $i++) {
                $DataEvent[$i] = $UserEvent->find()->where(['id' => $JoinData[$i]->event_id])->all();
            }

            // var_dump($DataEvent[0][0]->title);
            return $this->render('../dashboard/user/index', [
                "DataEvent" => $DataEvent,
                "TotalDataEvent" => $TotalDataEvent,
            ]);
        }    
    }

    public function actionEvent() {
        $DataUser = Yii::$app->session->get('UserData');
        if ( !empty($DataUser->type) ) {
            return $this->render('../dashboard-admin/', [
                "DataEvent" => null,
            ]);
        } else {
            $UserEvent = new EventSearch();
            $UserJoin = new EventAttandanceSearch();
            $JoinData = $UserJoin->find()->where(['users_id' => $DataUser->id])->all();
            $DataEvent = [];
            for( $i = 0; $i < count($JoinData); $i++) {
                $DataEvent[$i] = $UserEvent->find()->where(['id' => $JoinData[$i]->event_id])->all();
            }

            return $this->render('../dashboard/user/event', [
                "DataEvent" => $DataEvent,
            ]);
        }
    }

    public function actionProfile() {
        return $this->render('../dashboard/user/profile');
    }
}
