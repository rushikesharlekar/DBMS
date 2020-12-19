<?php include_once '../web_services/checkclublogin.php' ?>

<?php include_once 'templates/header.php'?>

<!-- navigation -->
<?php include_once 'templates/menu.php' ?>

<!-- jumbotron -->
<?php include_once '../templates/welcome.php'?>

<div class="container mt-5 mr-5 ml-5" >
    <div clas="container-fluid " >
        <?php include_once 'add-track.php' ?>
    </div>
    <div clas="container-fluid " >
        <?php include_once 'add-artist.php' ?>
    </div>
</div>

<div class="container">
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



<?php include_once 'templates/footer.php'?>