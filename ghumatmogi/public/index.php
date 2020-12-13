<?php include_once 'templates/header.php'?>

<?php include_once 'templates/welcome.php'?>



<!-- navigation -->

<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container">
    <a class="navbar-brand" href="#">Ghumat Mogi</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">All Tracks <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="#">Audio CD <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="#">Live Performances <span class="sr-only">(current)</span></a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Others
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Clubs</a>
            <a class="dropdown-item" href="#">Artists</a>
            <!-- <div class="dropdown-divider"></div> -->
            <a class="dropdown-item" href="#">Composers</a>
          </div>
        </li>
      </ul>
      <!-- ================ -->
      <ul class="navbar-nav mr-auto ml-auto">
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
        </form>
      </ul>
      <!-- ===================== -->
      <ul>        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle user_dropdown" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Clubs</a>
            <a class="dropdown-item" href="#">Artists</a>
            <!-- <div class="dropdown-divider"></div> -->
            <a class="dropdown-item" href="#">Composers</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- jumbotron  -->

<div class="container mt-5">
  <div class="jumbotron">
    <h1 class="display-4">Ghumat Aarti Library!</h1>
    <p class="lead">Brought to you by Ghumat Mogi</p>
    <hr class="my-4">
    <p>We bring yu the most avaited Ghumat aarti library for all the ghumat aarti lovers.</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
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