<?php

header('Content-type: application/json');

require_once '../config/connect.php';



$art_firstname = $_POST['inputArtistFirstName'];
$art_lastname = $_POST['inputArtistLastName'];
$art_address = $_POST['inputArtistAddress'];
$club_id = $_POST['inputcluboption'];
$artist_role_1 = $_POST['inputrole_1'];
$artist_role_2 = $_POST['inputrole_2'];
$artist_role_3 = $_POST['inputrole_3'];

$get_artist = mysqli_query($connect,"select art_id from artist where art_firstname = '$art_firstname' and art_lastname = '$art_lastname'");
if(mysqli_num_rows($sql_verify) > 0){
    
    $response_array['status']='fail';
}
else{
    $insert_artist = mysqli_query($connect,"insert into artist values ('','$art_firstname','$art_lastname','$art_address','$club_id')");
    
    if($insert_artist){
        $get_artist = mysqli_query($connect,"select * from artist where art_firstname = '$art_firstname' and art_lastname = '$art_lastname'");
        if(mysqli_num_rows($get_artist) > 0){
            $art_data = mysqli_fetch_assoc($get_artist);
            $art_id = $art_data['art_id'];
            $insert_role1 = mysqli_query($connect,"insert into role values ('$art_id','$artist_role_1')");
            if($artist_role_2 != ""){
                $insert_role2 = mysqli_query($connect,"insert into role values ('$art_id','$artist_role_2')");
            }
            if($artist_role_3 != ""){
                $insert_role3 = mysqli_query($connect,"insert into role values ('$art_id','$artist_role_3')");
            }
            $response_array['status']='success';
        }
        
    }
    else{
        $response_array['status']='failure';
    }
}

echo $response_array;


?>