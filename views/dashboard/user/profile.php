<?php
	use yii\web\Session;
	$user_data = Yii::$app->session->get('UserData');
	$images = "https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1532922691/Event_terpopuler_syag8e.jpg";
	$err_data = null;
?>
<style type="text/css">
	#profile .profile {
        display: flex;
        justify-content: flex-start;
        align-content: center;
        border: 1px solid rgba(25, 25, 25, 0.3);
        padding: 2.5%;
        border-radius: 25px;
        margin-bottom: 25px;
        position: relative;
    } 
    #profile .profile .logout { position: absolute; top: 50%; right: 2.5%; transform: translateY(-50%); }
    #profile .profile .image-box { margin-right: 25px; }
    #profile .profile .image-box .image {
        width: 100px;
        height: 100px;
        background-color: rgba(0, 0, 0, 1.0);
        border-radius: 50%;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        box-shadow: 1px 2px 10px rgba(25, 25, 25, 0.25);
    }
</style>
<section id="profile">
	<div class="row">
		<div class="col-12" style="margin-bottom: 15px;">
			<a href="/index.php?r=dashboard%2Findex"> <- Back To Dashboard</a>
		</div>
	</div>
	<div class="row">
		<div class="col-12 content profile">
            <div class="image-box">
                <div class="image" style="background-image: url('<?= $images ?>');"></div>
            </div>
            <div class="description-box">
                <h1><?= $user_data->fullname ?></h1>
                <tag><?= $user_data->username ?></tag>
            </div>
            <div class="logout"><a href="/index.php?r=user-custom/logout">Logout</a></div>
        </div>
        <div class="col-12 content edit-profile">
        	<h4>Edit Your Profile</h4>
        	<hr>
        	<form method="post" action="">
		        <div class="form-group box-wrapper">
		            <label>Username</label>
		            <input value="<?php echo $user_data->username ?>" class="form-control" id="username" name="username" placeholder="input your username.." />
		            <?php $err_data != null ? print($err_data[0]) : print(null) ?>
		        </div>
		        
		        <div class="form-group box-wrapper">
		            <label>Password</label>
		            <input value="<?php echo $user_data->password ?>" class="form-control" id="password" name="password" placeholder="input your password.." type="password" />
		            <?php $err_data != null ? print($err_data[1]) : print(null) ?>
		        </div>
		        
		        <div class="form-group box-wrapper">
		            <label>Fullname</label>
		            <input value="<?php echo $user_data->fullname ?>" class="form-control" id="fullname" name="fullname" placeholder="input your fullname.." />
		            <?php $err_data != null ? print($err_data[2]) : print(null) ?>
		        </div>

		        <div class="form-group box-wrapper">
		            <label>Usia</label>
		            <input value="<?php echo $user_data->usia ?>" class="form-control" id="usia" name="usia" placeholder="input your usia.." />
		            <?php $err_data != null ? print($err_data[3]) : print(null) ?>
		        </div>

		        <div class="form-group box-wrapper">
		            <label>Alamat</label>
		            <input value="<?php echo $user_data->alamat ?>" class="form-control" id="alamat" name="alamat" placeholder="input your alamat.." />
		            <?php $err_data != null ? print($err_data[4]) : print(null) ?>
		        </div>

		        <div class="form-group box-wrapper">
		            <label>Sekolah</label>
		            <input value="<?php echo $user_data->sekolah ?>" class="form-control" id="sekolah" name="sekolah" placeholder="input your sekolah.." />
		            <?php $err_data != null ? print($err_data[5]) : print(null) ?>
		        </div>
		        <button type="submit" class="btn btn-primary">Submit</button>
		    </form>
        </div>
	</div>
</section>