<?php

header('Content-type: application/json');

require_once '../config/connect.php';



$trk_name = $_POST['inputTrackName'];
$club = $_POST['inputcluboption'];
$artist = $_POST['inputcomposeroption'];

// $get_club = mysqli_query($connect,"select club_id from club where club_name = '$club'");
// if(mysqli_num_rows($sql_verify) > 0){
//     $club_data = mysqli_fetch_assoc($get_club);
//     // $response_array['status']='fail';
// }
// $get_composer = mysqli_query($connect,"select art_id from artist where art_firstname = '$art_firstname' and art_lastname = '$art_lastname'");
// if(mysqli_num_rows($sql_verify) > 0){
//     $composer_data = mysqli_fetch_assoc($get_composer);
//     // $response_array['status']='fail';
// }
// $club_data = mysqli_fetch_assoc($get_club);
// $composer_data = mysqli_fetch_assoc($get_composer);

$club_id = $club_data['club_id'];
$art_id = $composer_data['art_id'];
$response_array['status']='before';
$insert_track = mysqli_query($connect,"insert into track values ('','$trk_name','$artist','NULL','$club')");

if($insert_track){
    $response_array['status']='success';
}
else{
    $response_array['status']='failure';
}


echo json_encode($response_array);

?>