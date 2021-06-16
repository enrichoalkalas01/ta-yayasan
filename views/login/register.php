<section id="register-box">
    <h1>Admin Register</h1>
    <form method="post" action="http://localhost:8080/index.php?r=site%2Fadmin-register-post">
        <div class="box-wrapper">
            <label>Username</label>
            <input id="username" name="username" placeholder="input your username.." />
            <?php $err_data != null ? print($err_data[0]) : print(null) ?>
        </div>
        <div class="box-wrapper">
            <label>Password</label>
            <input id="password" name="password" placeholder="input your password.." type="password" />
            <?php $err_data != null ? print($err_data[1]) : print(null) ?>
        </div>
        <div class="box-wrapper">
            <label>Fullname</label>
            <input id="fullname" name="fullname" placeholder="input your fullname.." />
            <?php $err_data != null ? print($err_data[2]) : print(null) ?>
        </div>
        <button type="submit">Submit</button>
    </form>
</section>