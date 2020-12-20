<?php include_once '../web_services/checkclublogin.php' ?>

<?php include_once 'templates/header.php'?>

<!-- navigation -->
<?php include_once 'templates/menu.php' ?>

<!-- jumbotron -->
<?php include_once '../templates/welcome.php'?>

<?php 

require_once '../config/connect.php';

$email = $_SESSION['email'];
// $role = $_SESSION['role'];
$user_sql = mysqli_query($connect,"select * from user where email = '$email'");

$user_data = mysqli_fetch_array($user_sql);

?>
<?php if($user_data['approved'] == 'yes'){ ?>
<div class="container mt-5 mr-5 ml-5" >
    <div clas="container-fluid " >
        <?php include_once 'add-track.php' ?>
    </div>
    <div clas="container-fluid " >
        <?php include_once 'add-artist.php' ?>
    </div>
</div>
<?php }
else{
?>
<div class="container mt-5 mr-5 ml-5" align="center">
    <span><i class="fas fa-stopwatch"></i>Waiting for Admins approval....</span>
</div>
<?php } ?>


<!-- <div class="container">
  <div class="row mt-5">
    <nav aria-label="">
      <div class="albums" id="album_show">
        <ul class="sh_album">

        </ul>
      </div>
    </nav>
  </div>
  <div class="row mt-5">
    <nav aria-label="">
      <div class="albums" id="club_show">
        <ul class="sh_club">

        </ul>
      </div>
    </nav>
  </div>
  <div class="row mt-5">
    <nav aria-label="">
      <div class="albums" id="performance_show">
        <ul class="sh_perfmc">

        </ul>
      </div>
    </nav>
  </div>
</div>
 -->


<?php include_once 'templates/footer.php'?>