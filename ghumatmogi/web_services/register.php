<?php

header('Content-type: application/json');

require_once '../config/connect.php';

$firstName = $_POST['userFirstName'];
$lastName = $_POST['userLastName'];
$gender = $_POST['userGender'];
$ifClub = $_POST['ifClub'];
$club = $_POST['userClub'];
$email = $_POST['userEmail'];
$password = $_POST['userPassword'];

// echo $email;

if($ifClub == 'no'){
    $sql_verify = mysqli_query($connect,"select email from puser where email='$email'");
    if(mysqli_num_rows($sql_verify) > 0){
        // echo "fail";
        $response_array['status']='fail';
    }
    else{
        $sql_insert = mysqli_query($connect,"insert into puser values ('','$firstName','$lastName','$email','$password')");
        if($sql_insert){
            // echo "inserted";
            $response_array['status']='success';
        }
        else{
            // echo "failure";
            $response_array['status']='failure';
    
        }
       
    }
}
else{
    $sql_verify = mysqli_query($connect,"select email from cuser where email='$email'");
    if(mysqli_num_rows($sql_verify) > 0){
        // echo "fail";
        $response_array['status']='fail';
    }
    else{
        $sql_insert = mysqli_query($connect,"insert into cuser values ('','$firstName','$lastName','$club','$ifClub','$email','$password')");
        if($sql_insert){
            // echo "inserted";
            $response_array['status']='success';
        }
        else{
            // echo "failure";
            $response_array['status']='failure';
    
        }
       
    }
}



echo json_encode($response_array);


?>