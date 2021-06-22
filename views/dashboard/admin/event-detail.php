<?php
	use yii\web\Session;
	$user_data = Yii::$app->session->get('UserData');
	$images = "https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1532922691/Event_terpopuler_syag8e.jpg";
?>
<style type="text/css">
	table { font-family: arial, sans-serif; border-collapse: collapse; width: 100%; margin-bottom: 10px; }
    td, th {border: 1px solid #dddddd; padding: 8px; }
    tr:nth-child(even) { background-color: #dddddd; }
	.container {
		padding-top: 0 !important;
	}

	#event-detail {
		width: 100%;
		position: relative;
	}

	#event-detail .images-box {
		width: 100%;
	}

	#event-detail .images-box img {
		width: 100%;
	}

	#event-detail .images-box .image {
		width: 100%;
		height: 450px;
		background-color: rgba(0, 0, 0, 1.0);
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
		box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);
		border-bottom-right-radius: 10px;
		border-bottom-left-radius: 10px;
	}

	#event-detail .description-box h1 {
		text-transform: uppercase;
		font-weight: 700;
	}
</style>
<section id="event-detail">
	<div class="row">
		<div class="col-12 images-box">
			<div class="image" style="background-image: url('<?= $images ?>');"></div>
			<!-- <img src=""> -->
		</div>
		<div class="col-12 description-box">
			<h1><?= $DataEvent->title ?></h1>
			<div>
				<h4>Event Date :</h4>
				<span>Date From : <?= $DataEvent->date_from ?> </span>
				<span>Date To : <?= $DataEvent->date_to ?> </span>
			</div>
			<p>
				<?= $DataEvent->description ?>
			</p>
			<div class="col-12 content list-user">
                <div class="title-box">
                    <h4>User List Who Has Joined</h4>
                    <span>Counted : <?= $TotalDataUser ?></span>
                </div>
                <table id="TableEvent">
                    <thead>
                        <tr>
                            <th>Fullname</th>
                            <th>Username</th>
                            <th>Usia</th>
                            <th>Sekolah</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            foreach( $DataUser as $user ) {
                                echo '<tr>
                                    <td>'. $user->fullname .'</td>
                                    <td>'. $user->username .'</td>
                                    <td>'. $user->usia .'</td>
                                    <td>'. $user->sekolah .'</td>
                                    <td>'. $user->alamat .'</td>
                                    <td><a href="">R</a><a href="">E</a><a href="">D</a></td>
                                </tr>';
                            }
                        ?>
                    </tbody>
                </table>
                <a href="/index.php?r=dashboard/event">See More Your Data Event / Settings</a>
            </div>
		</div>
	</div>
</section>