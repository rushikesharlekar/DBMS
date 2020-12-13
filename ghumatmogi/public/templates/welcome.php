<?php

session_start();

if(isset($_COOKIE['login_msg'])){
    // echo "welcome ".$_SESSION['email']." ";

    echo '<script type="text/javascript">
    setTimeout(function(){
        Swal.fire("Hello '.$_SESSION['firstname'].' '.$_SESSION['lastname'].'","Welcome to Ghumat Mogi","success");
    },100);
    </script>';

}
else{
    echo"";
}

?>