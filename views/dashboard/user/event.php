<style type="text/css">
	table { font-family: arial, sans-serif; border-collapse: collapse; width: 100%; }
    td, th {border: 1px solid #dddddd; padding: 10px; }
    tr:nth-child(even) { background-color: #dddddd; }
</style>
<section id="event" class="dashboard">
	<div class="row">
		<div class="col-12">
			<a href="/index.php?r=dashboard%2Findex"> <- Back To Dashboard</a>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<h1>Your Event Data & Status</h1>
		</div>
	</div>
	<div class="row" style="margin-bottom: 10px;">
		<div class="col-12">
			<a href="/index.php?r=site%2Fevent" class="btn btn-primary">Join More Event</a>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<table id="TableEvent">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Excerpt</th>
                        <th>Date From</th>
                        <th>Date To</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach( $DataEvent as $event ) {
                            echo '<tr>
                                <td>'. $event[0]->title .'</td>
                                <td>'. $event[0]->excerpt .'</td>
                                <td>'. $event[0]->date_from .'</td>
                                <td>'. $event[0]->date_to .'</td>
                                <td><a href="">R</a><a href="">E</a><a href="">D</a></td>
                            </tr>';
                        }
                    ?>
                </tbody>
            </table>
		</div>
	</div>
</section>