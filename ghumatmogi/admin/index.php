<?php include_once 'templates/header.php'?>

<?php include_once '../templates/welcome.php'?>

<!-- navigation -->
<?php include_once 'templates/menu.php' ?>

<!-- jumbotron -->
<?php include_once '../templates/welcom.php'?>

<div class="container mt-5 mr-5 ml-5" >
    <div clas="container-fluid " id="displayTrack" name="displayTrack">
        <?php include_once 'add-track.php' ?>
    </div>
    <div clas="container-fluid " id="displayTrack" name="displayTrack">
        <?php include_once 'add-club.php' ?>
    </div>
    <div clas="container-fluid " id="displayTrack" name="displayTrack">
        <?php include_once 'add-artist.php' ?>
    </div>
</div>

<!-- homepage content -->
<!-- <div class="container">
  <div class="row mt-5">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Albums</a></li>
        <li class="breadcrumb-item active" aria-current="page"></li>
      </ol>
    </nav>
  </div>
  <div class="row mt-5">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Clubs</a></li>
        <li class="breadcrumb-item active" aria-current="page"></li>
      </ol>
    </nav>
  </div>
  <div class="row mt-5">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Tracks</a></li>
        <li class="breadcrumb-item active" aria-current="page"></li>
      </ol>
    </nav>
  </div>
</div> -->

<!-- album display -->
<!-- <div class="container">
  <div class="row">
    <div class="col sm-3 mb-3">
      <div class="card">
        <img src="images/download.jpg" alt="image">
        <div class="card-image-overlay text-white d-flex flex-column justify-content-center">
          <h3>album name</h3>
          <h6>club name</h6>
        </div>

      </div>

    </div>

  </div>
</div> -->

<?php include_once 'templates/footer.php'?>