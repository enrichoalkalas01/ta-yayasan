<?php

namespace app\controllers;

use Yii;
use yii\web\Session;
use app\models\Event;
use app\models\EventSearch;
use app\models\EventAttandance;
use app\models\EventAttandanceSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class EventCustomController extends \yii\web\Controller
{
    public function actionIndex() {
        return $this->render('index');
    }

    public function actionCreate() {
        return $this->render('../event/custom/create', ['err_data' => null]);
    }

    public function actionCreatePost() {
        if ( empty($_POST["title"]) || empty($_POST["excerpt"]) || empty($_POST["description"]) || empty($_POST["date_to"]) || empty($_POST["date_from"]) ) {
            $ErrData = "Some Field Has Null Input";
            return json_encode($ErrData);
        } else {
            $EventModel = new Event();
            $EventModel->title = $_POST["title"];
            $EventModel->excerpt = $_POST["excerpt"];
            $EventModel->description = $_POST["description"];
            $EventModel->date_to = $_POST["date_to"];
            $EventModel->date_from = $_POST["date_from"];

            if ( $EventModel->validate() ) {
                $EventModel->save();
                $this->redirect('/index.php?r=event%2Findex&page=1');
            } else {
                $this->redirect('/index.php?r=admin/event');
            }
        }
    }

    public function actionJoinEvent() {
        $EventAttandance = new EventAttandance();
        $EventAttandance->event_id = $_POST["event_id"];
        $EventAttandance->users_id = $_POST["user_id"];

        if ( $EventAttandance->save() ) {
            return $this->redirect('/index.php?r=dashboard%2Findex');
        } else {
            echo "Failed To Attandance";
            return redirect('/');
        }
    }
}
