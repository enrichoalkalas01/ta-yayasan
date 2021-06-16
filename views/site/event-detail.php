<?php
	use yii\web\Session;
	$user_data = Yii::$app->session->get('UserData');
	$images = "https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1532922691/Event_terpopuler_syag8e.jpg";
?>
<style type="text/css">
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
			<h1><?= $DataEventDetail->title ?></h1>
			<div>
				<h4>Event Date :</h4>
				<span>Date From : <?= $DataEventDetail->date_from ?> </span>
				<span>Date To : <?= $DataEventDetail->date_to ?> </span>
			</div>
			<p>
				<?= $DataEventDetail->description ?>
			</p>
			<div class="button-box">
				<?php 
					if ( $user_data != null ) {
						echo '
							<form action="/index.php?r=event-custom/join-event" method="post">
							<input id="event-id" name="event_id" hidden="true" value="'.$DataEventDetail->id.'">
							<input id="user-id" name="user_id" hidden="true" value="'.$user_data->id .'">
							<button type="submit" class="btn btn-primary">Join Event</button>
							</form>
						';
					} else {
						echo '
							<a href="/index.php?r=user-custom/login" class="btn btn-primary">Join Event</a>
						';
					}
				?>
			</div>
		</div>
	</div>
</section>