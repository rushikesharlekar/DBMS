<?php

session_start();

if(isset($_COOKIE['login_msg'])){
    echo "welcome ".$_SESSION['email']." ";
}
else{
    echo"no cookie found";
}

?>