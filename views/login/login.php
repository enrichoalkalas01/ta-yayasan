<?php 
    use yii\web\Session;
?>
<section id="login-box">
    <?php 
        Yii::$app->session->get('err_login') ?
            print('<span class="err_form">'. Yii::$app->session->get('err_login') .'</span>')
        : print('<span class="err_form">'. Yii::$app->session->get('err_login') .'</span>')
    ?>
    <form method="post" action="/index.php?r=user-custom/login-post">
        <div class="form-group box-wrapper">
            <label>Username</label>
            <input id="username" class="form-control" name="username" placeholder="input your username.." />
        </div>
        <div class="form-group box-wrapper">
            <label>Password</label>
            <input id="password" class="form-control" name="password" placeholder="input your password.." type="password"/>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>

<?php var_dump(Yii::$app->session->get('UserData'));?>
