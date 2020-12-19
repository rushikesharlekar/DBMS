

<?php

require_once '../config/connect.php';
$email = $_SESSION['email'];
$club_result = mysqli_query($connect,"select * from club where club_id in (select club from user where email = '$email' and role = 'club')");
$club_data = mysqli_fetch_array($club_result);
$clubname = $club_data['club_name'];
// $track_sql = mysqli_query($connect,"select * from track where club_id in (select club_id from club where track.club_id = club.club_id and club_name = '$clubname')");
$track_sql = mysqli_query($connect,"select * from track where club_id in (select club_id from club where club_name = '$clubname')");
$composer_result = mysqli_query($connect,"select * from artist where art_id in (select art_id from role where role.art_id = artist.art_id and role_type = 'composer')");

?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-3 ">
    <div class="form-select" id="tracksort">
    <label for="club_sort">Composer</label>
    <select class="form-control container-fluid" id="selectcomposer" name="userComposer">
      <option value="null" selected >All</option>
        <?php
        while($row = mysqli_fetch_array($composer_result)):;
        ?>
        <option value="<?php echo $row[1]; ?>"> <?php echo $row[1]." ".$row[2]; ?> </option>
        <?php endwhile; ?>
    </select>
    <!-- <button type="submit" id="sorttrackbutton" name="sorttrack">Apply</button> -->
    </div>
    </div>
    <div class="col-sm" >
      <div class="container" id="displaytracks">
        <?php
            while($row = mysqli_fetch_array($track_sql)):;
        ?>
        <div class="row-mt-2 ">
            <div class="row mt-1">
                <h5><i class="fa fa-music" aria-hidden="true"></i> <?php echo$row['trk_name']; ?></h5>
            </div>
            
            <?php 
                
                $art_id = $row['art_id'];
                $composer_query = mysqli_query($connect,"select * from artist where art_id = '$art_id'");
                $composer_data = mysqli_fetch_array($composer_query);
            ?>
            <div class="row-mt-1">
                <h6>Composer: <?php echo$composer_data['art_firstname']." ".$composer_data['art_lastname']; ?></h6>
            </div>
            
        </div>
        <?php endwhile; ?>

      </div>
    </div>
    <!-- <div class="col-sm">
      One of three columns
    </div> -->
  </div>
</div>