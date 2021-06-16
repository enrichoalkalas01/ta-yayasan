<?php
    use yii\web\Session;
    $user_data = Yii::$app->session->get('UserData');
    $this->title = "Dashboard";
    $images = "https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1532922691/Event_terpopuler_syag8e.jpg";
?>
<style>
    table { font-family: arial, sans-serif; border-collapse: collapse; width: 100%; margin-bottom: 10px; }
    td, th {border: 1px solid #dddddd; padding: 8px; }
    tr:nth-child(even) { background-color: #dddddd; }
    #dashboard .profile {
        display: flex;
        justify-content: flex-start;
        align-content: center;
        border: 1px solid rgba(25, 25, 25, 0.3);
        padding: 2.5%;
        border-radius: 25px;
        margin-bottom: 25px;
        position: relative;
    } 
    #dashboard .profile .logout { position: absolute; top: 50%; right: 2.5%; transform: translateY(-50%); }
    #dashboard .profile .image-box { margin-right: 25px; }
    #dashboard .profile .image-box .image {
        width: 100px;
        height: 100px;
        background-color: rgba(0, 0, 0, 1.0);
        border-radius: 50%;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        box-shadow: 1px 2px 10px rgba(25, 25, 25, 0.25);
    }
    #dashboard .mini-menu ul {
        width: 100%;
        padding: 0;
        margin: 0;
        list-style: none;
        display: flex;
        border: 1px solid rgba(0, 0, 0, 0.25);
        padding: 5px;
        flex-basis: auto;
        border-radius: 5px;
    }
    #dashboard .mini-menu ul li { width: 100%; text-align: center; display: flex; }
    #dashboard .mini-menu ul li a { color: #000; font-weight: 400; width: 100%; }
    #dashboard .mini-menu ul li a div { 
        width: 98%;
        height: 100%;
        padding: 10px 25px;
        background-color: #dedede;
        border-radius: 5px;
        margin: auto;
    }
    #dashboard .list-event .title-box { position: relative; }
    #dashboard .list-event .title-box span { position: absolute; right: 5%; top: 0; }
</style>
<section id="dashboard">
    <div class="container-fluid main-content">
        <div class="row box-content">
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
            <div class="col-12 content mini-menu">
                <ul>
                    <li><a href="/index.php?r=dashboard/profile"><div>Profile</div></a></li>
                    <li><a href="/index.php?r=dashboard/event"><div>Your Event</div></a></li>
                    <li><a href="/index.php?r=dashboard/history"><div>History</div></a></li>
                </ul>
            </div>
            <div class="col-12 content list-event">
                <div class="title-box">
                    <h4>Your Event List</h4>
                    <span>Counted : <?= $TotalDataEvent ?></span>
                </div>
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
                <a href="/index.php?r=dashboard/event">See More Your Data Event / Settings</a>
            </div>
        </div>
    <div>
</section>
<script>
    $(document).ready( function () {
        $('#TableEvent').DataTable();
    });
</script>