<section id="register-box">
    <h1>User Register</h1>
    <form method="post" action="/index.php?r=user-custom/register-post">
        <div class="form-group box-wrapper">
            <label>Username</label>
            <input class="form-control" id="username" name="username" placeholder="input your username.." />
            <?php $err_data != null ? print($err_data[0]) : print(null) ?>
        </div>
        
        <div class="form-group box-wrapper">
            <label>Password</label>
            <input class="form-control" id="password" name="password" placeholder="input your password.." type="password" />
            <?php $err_data != null ? print($err_data[1]) : print(null) ?>
        </div>
        
        <div class="form-group box-wrapper">
            <label>Fullname</label>
            <input class="form-control" id="fullname" name="fullname" placeholder="input your fullname.." />
            <?php $err_data != null ? print($err_data[2]) : print(null) ?>
        </div>

        <div class="form-group box-wrapper">
            <label>Usia</label>
            <input class="form-control" id="usia" name="usia" placeholder="input your usia.." />
            <?php $err_data != null ? print($err_data[3]) : print(null) ?>
        </div>

        <div class="form-group box-wrapper">
            <label>Alamat</label>
            <input class="form-control" id="alamat" name="alamat" placeholder="input your alamat.." />
            <?php $err_data != null ? print($err_data[4]) : print(null) ?>
        </div>

        <div class="form-group box-wrapper">
            <label>Sekolah</label>
            <input class="form-control" id="sekolah" name="sekolah" placeholder="input your sekolah.." />
            <?php $err_data != null ? print($err_data[5]) : print(null) ?>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>