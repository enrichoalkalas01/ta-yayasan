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
    public function actionIndex() {
        return $this->render('index');
    }

    public function actionLogin() {
        return $this->render('../login/login');
    }

    public function actionLogout() {
        Yii::$app->session->remove('UserData');
        return $this->redirect('/');
    }

    public function actionLoginAdmin() {
        return $this->render('../login/login-admin');
    }

    public function hashed($type, $password) {
        $ciphering = "AES-128-CTR";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $encryption_iv = '1234567891011121';
        $encryption_key = "secret";

        if ( strtolower($type) == 'enrcrypt' ) {
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

    public function actionLoginAdminPost() {
        $ciphering = "AES-128-CTR";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $encryption_iv = '1234567891011121';
        $encryption_key = "secret";

        if ( empty($_POST["username"]) || empty($_POST["password"]) ) {
            $usernameerr = "Name Is Required";
            $passworderr = "Password Is Required";
            $data_err = array($usernameerr,$passworderr);
            return $this->render('../login/login', ["Data" => null, "err_data" => $data_err ]);
        } else {
            $password = $_POST["password"];

            $UserAdminSearch = new UserAdminSearch();
            $data = $UserAdminSearch->find()->where(["username" => $_POST["username"]])->one();

            // If Data Not Empty
            if ( !empty($data) ) {
                // Check Username Data If Same
                // Decrypt Password
                $decryption = openssl_decrypt($data->password, $ciphering,$encryption_key, $options, $encryption_iv);
                if ( $decryption != $_POST["password"]) {
                    $usernameerr = null;
                    $passworderr = "Wrong Password";
                    $data_err = array($usernameerr, $passworderr);
                    return $this->render('../login/login', ["Data" => null, "err_data" => $data_err ]);
                } else {
                    $session = Yii::$app->session;
                    $session->set('UserData', $data);
                    return $this->redirect('/');
                }
            } else {
                // If Username Is Not The Same As Data
                if ( $data->username == $_POST["username"]) {
                    $usernameerr = "Wrong Username / Username";
                    $passworderr = null;
                    $data_err = array($usernameerr,$passworderr);
                    return $this->render('../login/login', ["Data" => null, "err_data" => $data_err ]);
                }
            }
        }
    }

    public function actionAdminRegisterPost() {
        if ( empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["fullname"]) ) {
            $fullnameerr = "Full Name Is Required";
            $data_err = array($usernameerr,$passworderr,$fullnameerr);
            return $this->render('../login/register', ["Data" => null, "err_data" => $data_err ]);
        } else {
            $password = $_POST["password"];
            $ciphering = "AES-128-CTR";
            $iv_length = openssl_cipher_iv_length($ciphering);
            $options = 0;
            $encryption_iv = '1234567891011121';
            $encryption_key = "secret";
            
            // Encrypt Password
            $encryption = openssl_encrypt($password, $ciphering,$encryption_key, $options, $encryption_iv);

            $UserAdminSearch = new UserAdminSearch();
            $data = $UserAdminSearch->find()->where(["username" => $_POST["username"]])->one();
            // If Data Not Empty
            if ( !empty($data) ) {
                // Check Username Data If Same
                if ( $data->username == $_POST["username"]) {
                    $usernameerr = "Username Can't Be Same..";
                    $passworderr = "";
                    $fullnameerr = "";
                    $data_err = array($usernameerr,$passworderr,$fullnameerr);
                    return $this->render('../login/register', ["Data" => null, "err_data" => $data_err ]);
                }
            } else {
                // If Username Is Not The Same As Data
                $models = new User();
                $models->username = $_POST["username"];
                $models->fullname = $_POST["fullname"];
                $models->password = $encryption;
                $models->type = null;

                if ( $models->validate() != false ) {
                    $DataSend = "Success To Input Data";
                    return $this->render('/', ["Data" => $DataSend, "err_data" => null ]);
                } else {
                    $DataSend = "Failed To Input Data";
                    return $this->render('../login/register', ["Data" => $DataSend, "err_data" => null ]);
                }
            }
        }
    }


    public function actionUserRegister() {
        return $this->render('../login/register-peserta', ["err_data" => null ]);
    }

    public function actionUserRegisterPost() {
        if ( empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["fullname"]) ) {
            $data_err = array($usernameerr,$passworderr);
            return $this->render('../login/register', ["Data" => null, "err_data" => $data_err ]);
        } else {
            $password = $_POST["password"];
            $ciphering = "AES-128-CTR";
            $iv_length = openssl_cipher_iv_length($ciphering);
            $options = 0;
            $encryption_iv = '1234567891011121';
            $encryption_key = "secret";
            
            // Encrypt Password
            $encryption = openssl_encrypt($password, $ciphering,$encryption_key, $options, $encryption_iv);

            $UsersSearch = new UsersSearch();
            
            // $data = $UsersSearch->find()->where(["username" => $_POST["username"]])->one();
            // If Data Not Empty
            if ( !empty($data) ) {
                // Check Username Data If Same
                if ( $data->username == $_POST["username"]) {
                    $usernameerr = "Username Can't Be Same..";
                    $passworderr = "";
                    $fullnameerr = "";
                    $data_err = array($usernameerr,$passworderr,$fullnameerr);
                    return $this->render('../login/register', ["Data" => null, "err_data" => $data_err ]);
                }
            } else {
                // If Username Is Not The Same As Data
                $models = new Users();
                $models->username = $_POST["username"];
                $models->fullname = $_POST["fullname"];
                $models->usia = $_POST["usia"];
                $models->alamat = $_POST["alamat"];
                $models->sekolah = $_POST["sekolah"];
                $models->password = $encryption;

                if ( $models->validate() != false ) {
                    $DataSend = "Success To Input Data";
                    return $this->redirect('/');
                } else {
                    $DataSend = "Failed To Input Data";
                    return $this->render('../login/register', ["Data" => $DataSend, "err_data" => null ]);
                }
            }
        }
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
}
