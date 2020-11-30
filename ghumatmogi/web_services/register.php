<?php

require_once '../config/connect.php';

$userFirstName = $_POST['userFirstName'];
$userLastName = $_POST['userLastName'];
$userGender = $_POST['userGender'];
$ifClub = $_POST['ifClub'];
$userClub = $_POST['userClub'];
$userEmail = $_POST['userEmail'];
$userPassword = $_POST['userPassword'];

// echo $ifClub;

$id = 1;

// $sql_verify = mysqli_query($connect,"select * from users where email='$userEmail'");
// if(mysqli_num_rows($sql_verify)>0){
//     $response_array['status']='fail';
// }
// else{
    $sql_insert = myseli_query($connect,"insert into cusers(id,firstname,lastname,club,approved,email,password) values('$id','$userFisrtName',$userLatName','$userClub','not_approved','$userEmail','$userPassword')");
    echo "inserted";
// }


?>