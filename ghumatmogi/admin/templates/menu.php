<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php"><img src="../htdocs/ghumatmogi/images/icon.png" alt="Ghumat Mogi"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Users
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Admin</a>
          <a class="dropdown-item" href="#">Club</a>
          <a class="dropdown-item" href="#">Public</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Data
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="track.php">Tracks</a>
          <a class="dropdown-item" href="club.php">Clubs</a>
          <a class="dropdown-item" href="#">Album</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="artist.php">Artists</a>
        </div>
      </li>
      <li class="nav-item ">
      <a class="nav-link " href="clubrequest.php" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
          Club Requests
        </a>
      </li>
      <li>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </li>
    </ul>
      
    <div class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="fa fa-user-circle" aria-hidden="true"></i><?php echo $_SESSION['email']; ?></a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Edit</a>
        <a class="dropdown-item" href="../web_services/logout.php">Logout</a>
      </div>
    </div>
    
  </div>
</nav>