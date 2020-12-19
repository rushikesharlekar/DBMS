<?php

session_start();

if(isset($_COOKIE['login_msg'])){
    echo $_SESSION['email'];

    // echo '<script type="text/javascript">
    // setTimeout(function(){
    //     Swal.fire("Hello '.$_SESSION['firstname'].' '.$_SESSION['lastname'].'","Welcome to Ghumat Mogi","success");
    // },100);
    // </script>';
    // echo '<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="profileid">'.$_SESSION['email'].'</a>';

}
else{
    echo"";
}

?>