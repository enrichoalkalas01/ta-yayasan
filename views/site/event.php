<style type="text/css">
	#events .content-events {
		margin-bottom: 25px;
	}

	#events .content-events .card {
		width: 100% !important;
		border-radius: 5px;
		border: 1px solid rgba(0, 0, 0, 0.25);
	}

	#events .content-events .card .card-img-top {
		width: 100%;
		border-top-left-radius: 5px;
		border-top-right-radius: 5px;
	}

	#events .content-events .card .card-body {
		padding: 0 10px 10px;
	}
</style>
<section id="events">
	<div class="row">
		<div class="col-12 content title" style="text-align: center; padding: 0px 2.5% 25px; font-weight: 700;">
			<h1>List Of Upcoming Events</h1>
		</div>
	</div>
	<div class="row">
		<?php
			$images = "https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1532922691/Event_terpopuler_syag8e.jpg";
			foreach ($DataEvents as $data) {
				echo '
					<div class="content-events col-6 col-lg-3 col-md-3 col-sm-4 col-sx-6">
						<div class="card" style="width: 18rem;">
							<img class="card-img-top" src="'. $images .'" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">'. $data->title .'</h5>
								<p class="card-text">'. $data->excerpt .'</p>
								<a href="/index.php?r=site%2Fevent-detail&id='. $data->id .'" class="btn btn-primary">See Details</a>
							</div>
						</div>
					</div>
				';
			}
		?>
	</div>
</section>