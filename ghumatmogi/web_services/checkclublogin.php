<?php
session_start();

if(isset($_SESSION['email'])){
    if($_SESSION['role']=='admin'){

        session_destroy();
        echo '<script>window.location.href="../index.php"</script>';

    }
    else if($_SESSION['role']=='public'){

        // public
        session_destroy();
        echo '<script>window.location.href="../index.php"</script>';

    }
}
else{
    echo '<script>window.location.href="../index.php"</script>';
}

?>