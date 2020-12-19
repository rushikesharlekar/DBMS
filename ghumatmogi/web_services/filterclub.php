<?php
require_once '../config/connect.php';

if (($_POST['action']) == 'data') {
    // echo $_POST['club'];
    $club_sql = "select * from club";

    if (($_POST['address']) != "null") {
        // echo $_POST['address'];
        $addres = $_POST['address'];
        $club_sql = "select * from club where club_address = '$addres'";
        // echo 'hello';
    }

    $result = mysqli_query($connect,$club_sql);
    $output = '';

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)){
            // $club_id = $row['club_id'];
            // $art_id = $row['art_id'];
            // $club_query = mysqli_query($connect,"select * from club where club_id = '$club_id'");
            // $club_data = mysqli_fetch_array($club_query);
            // $composer_query = mysqli_query($connect,"select * from artist where art_id = '$art_id'");
            // $composer_data = mysqli_fetch_array($composer_query);
            $output .= '
            <div class="container">
                <div class="row mt-1">
                    <h5>' . $row['club_name'] . '</h5>
                </div>
                <div class="row-mt-1">
                    <h6>Club: ' . $row['club_address'] . '</h6>
                </div>
            </div>';
        }
    } else {
        $output = "<h3>No Records Found!</h3>";
    }
    echo $output;
}


?>