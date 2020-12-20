<?php
require_once '../config/connect.php';

if (($_POST['action']) == 'data1') {
    $club =$_POST['club'];
    $track_sql = " select * from track where ";

    if (($_POST['composer']) != "null") {
        // echo $_POST['club'];
        $composer = $_POST['composer'];
        $track_sql = " select * from track where club_id in (select club_id from club where club_name = '$club' and art_id = 'composer')";
    
    }

    $result = mysqli_query($connect,$track_sql);
    $output = '';

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)){
            $club_id = $row['club_id'];
            $art_id = $row['art_id'];
            $club_query = mysqli_query($connect,"select * from club where club_id = '$club_id'");
            $club_data = mysqli_fetch_array($club_query);
            $composer_query = mysqli_query($connect,"select * from artist where art_id = '$art_id'");
            $composer_data = mysqli_fetch_array($composer_query);
            $output .= '
            <div class="container">
                <div class="row mt-1">
                    <h5>' . $row['trk_name'] . '</h5>
                </div>
                <div class="row-mt-1">
                    <h6>Club: ' . $club_data['club_name'] . '</h6>
                </div>
                <div class="row-mt-1">
                    <h6>Composer: ' . $composer_data['art_firstname'] . ' ' . $composer_data['art_lastname'] . '</h6>
                </div>
            </div>';
        }
    } else {
        $output = "<h3>No Records Found!</h3>";
    }
    echo $output;
}

?>