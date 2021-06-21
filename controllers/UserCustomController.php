<?php

namespace app\controllers;
use Yii;
use yii\web\Session;
use app\models\Users;
use app\models\UsersSearch;
use app\models\UserAdmin;
use app\models\UserAdminSearch;

// $session = Yii::$app->session;
// $session->get('UserData');

class UserCustomController extends \yii\web\Controller
{
    public function hashed($type, $password) {
        $ciphering = "AES-128-CTR";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $encryption_iv = '1234567891011121';
        $encryption_key = "secret";

        if ( strtolower($type) == 'encrypt' ) {
            // Encrypt Password
            $encryption = openssl_encrypt($password, $ciphering,$encryption_key, $options, $encryption_iv);

            return $encryption;
        } else if ( strtolower($type) == 'decrypt' ) {
            // Decrypt Password
            $decryption = openssl_decrypt($data->password, $ciphering,$encryption_key, $options, $encryption_iv);
            return $decryption;
        } else {
            return 'Wrong Type Of Hash';
        }
    }

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionLogin() {
        return $this->render('../login/login');
    }

    public function actionRegister() {
        return $this->render('../login/register', ["err_data" => null ]);
    }

    public function actionLogout() {
        Yii::$app->session->remove('UserData');
        return $this->redirect('/');
    }

    public function actionLoginPost() {
        if ( empty($_POST["username"]) || empty($_POST["password"]) ) {
            $ErrData = "Username / Password Is Empty..";
            Yii::$app->session->set('err_login', $ErrData);
            return $this->redirect('/index.php?r=user-custom%2Flogin');
        } else {
            $ciphering = "AES-128-CTR";
            $iv_length = openssl_cipher_iv_length($ciphering);
            $options = 0;
            $encryption_iv = '1234567891011121';
            $encryption_key = "secret";
            // echo $_POST['username'];
            $UserSearch = new UsersSearch();
            $DataFind = $UserSearch->find()->where(['username' => $_POST["username"]])->one();

            if ( empty($DataFind) ) {
                $ErrData = "No Data Username Here..";
                Yii::$app->session->set('err_login', $ErrData);
                return $this->redirect('/index.php?r=user-custom%2Flogin');
            } else {
                $decryption = openssl_decrypt($DataFind->password, $ciphering,$encryption_key, $options, $encryption_iv);
                if ( $decryption != $_POST["password"] ) {
                    // If Password Do Not Match
                    $ErrData = "Username / Password Is Empty..";
                    Yii::$app->session->set('err_login', $ErrData);
                    return $this->redirect('/index.php?r=user-custom%2Flogin');
                } else {
                    // If Password Match
                    Yii::$app->session->remove('err_login');
                    Yii::$app->session->set('UserData', $DataFind);
                    return $this->redirect('/');
                }
            }
        }
    }

    public function actionRegisterPost() {
        if ( empty($_POST['username']) || empty($_POST['password']) ) {
            return $this->redirect('/index.php?r=user-custom/register');
        } else {
            $password = $this->hashed('encrypt', $_POST['password']);

            $UserSearch = new UsersSearch();
            $CheckUser = $UserSearch->find()->where(['username' => $_POST['username']])->one();

            if ( $CheckUser != null ) {
                return $this->redirect('/index.php?r=user-custom/register');
            } else {
                $UserModel = new Users();
                $UserModel->username = $_POST['username'];
                $UserModel->password = $password;
                $UserModel->fullname = $_POST['fullname'] != '' ? $_POST['fullname'] : null ;
                $UserModel->usia = $_POST['usia'] != '' ? $_POST['usia'] : null;
                $UserModel->alamat = $_POST['alamat'] != '' ? $_POST['alamat'] : null;
                $UserModel->sekolah = $_POST['sekolah'] != '' ? $_POST['sekolah'] : null;
                $UserModel->type = null;

                if ( $UserModel->save() ) {
                    return $this->redirect('/index.php?r=user-custom/login');
                } else {
                    return $this->redirect('/index.php?r=user-custom/register');
                }
            }
        }
    }
}
