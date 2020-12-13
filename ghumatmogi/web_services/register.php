<?php

header('Content-type: application/json');

require_once '../config/connect.php';

$firstName = $_POST['userFirstName'];
$lastName = $_POST['userLastName'];
$gender = $_POST['userGender'];
$role = $_POST['userRole'];
$club = $_POST['userClub'];
$email = $_POST['userEmail'];
$password = $_POST['userPassword'];
// $club = 'NULL';

// echo $email;


$sql_verify = mysqli_query($connect,"select email from user where email='$email'");
    if(mysqli_num_rows($sql_verify) > 0){
        // echo "fail";
        $response_array['status']='fail';
    }
    else{
        if($role == 'public'){
            $club = 'NULL';
            $approved = 'NULL';
        }
        else{
            // $sql_club_id = mysqli_query($connect,"select * from club where club_name='$clubName'");
            // $club_data = mysqli_fetch_assoc($sql_club_id);
            // $club = $club_data['club_id'];
            $approved = 'no';
        }
        $sql_insert = mysqli_query($connect,"insert into user values ('','$firstName','$lastName','$role','$club','$approved','$email','$password')");
        if($sql_insert){
            // echo "inserted";
            $response_array['status']='success';
        }
        else{
            // echo "failure";
            $response_array['status']='failure';
    
        }
       
    }



echo json_encode($response_array);


?>