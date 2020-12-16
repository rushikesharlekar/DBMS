<?php

header('Content-type: application/json');

require_once '../config/connect.php';



$club_name = $_POST['inputClubName'];
$club_address = $_POST['inputClubAddress'];

$get_club = mysqli_query($connect,"select * from club where club_name = '$club' and club_address='$club_address'");
if(mysqli_num_rows($sql_verify) > 0){
    $club_data = mysqli_fetch_assoc($get_club);
    $response_array['status']='fail';
}
else{
    $insert_track = mysqli_query($connect,"insert into club values ('','$club_name','$club_address')");

    if($insert_track){
        $response_array['status']='success';
    }
    else{
        $response_array['status']='failure';
    }
}


$insert_track = mysqli_query($connect,"insert into track values ('','$trk_name','$artist','NULL','$club')");

if($insert_track){
    $response_array['status']='success';
}
else{
    $response_array['status']='failure';
}

echo json_encode($response_array);


?>