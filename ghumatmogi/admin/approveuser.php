<?php include_once '../web_services/checkadminlogin.php'?>

<?php include_once 'templates/header.php'?>

<?php 

require_once '../config/connect.php';

$id = $_GET["id"];

echo $id;
$sql_check1a = mysqli_query($connect,"update user set approved = 'yes' where id = '$id'");
            
    if(($sql_check1a)>0){
        header('location:clubrequest.php');
    }
    else{
        
    }   

?>