<?php

require_once '../config/connect.php';

$track_sql = mysqli_query($connect,"select * from track");

$club_result = mysqli_query($connect,"select * from club");

$composer_result = mysqli_query($connect,"select * from artist where art_id in (select art_id from role where role.art_id = artist.art_id and role_type = 'composer')");

?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-3 ">
    <div class="form-select" id="tracksort">
    <label for="club_sort">club</label>
    <select class="form-control container-fluid club_check" id="selectclub" name="userClub">
      <option value="null" selected>All</option>
        <?php
        while($row = mysqli_fetch_array($club_result)):;
        ?>
        <option value="<?php echo $row[1]; ?>"> <?php echo $row[1]; ?> </option>
        <?php endwhile; ?>
    </select>
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
                <h5><?php echo$row['trk_name']; ?></h5>
            </div>
            
            <?php 
                $club_id = $row['club_id'];
                $art_id = $row['art_id'];
                $club_query = mysqli_query($connect,"select * from club where club_id = '$club_id'");
                $club_data = mysqli_fetch_array($club_query);
                $composer_query = mysqli_query($connect,"select * from artist where art_id = '$art_id'");
                $composer_data = mysqli_fetch_array($composer_query);
            ?>
            <div class="row-mt-1">
                <h6>Club: <?php echo$club_data['club_name']; ?></h6>
            </div>
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