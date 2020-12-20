<?php include_once '../web_services/checkadminlogin.php'?>

<?php include_once 'templates/header.php'?>

<!-- navigation -->
<?php include_once 'templates/menu.php' ?>

<!-- jumbotron -->
<?php include_once '../templates/welcome.php'?>

<div class="container mt-5 mr-5 ml-5 homepagecontainer" >
    <div clas="container-fluid " >
        <?php include_once 'add-track.php' ?>
    </div>
    <div clas="container-fluid " >
        <?php include_once 'add-club.php' ?>
    </div>
    <div clas="container-fluid " >
        <?php include_once 'add-artist.php' ?>
    </div>
</div>



<?php include_once 'templates/footer.php'?>