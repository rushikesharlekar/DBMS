<?php

require_once '../config/connect.php';

$artist_sql = mysqli_query($connect,"select * from artist");

$club_result = mysqli_query($connect,"select * from club");

$art_address = mysqli_query($connect,"select distinct art_address from artist");

//  $composer_result = mysqli_query($connect,"select * from artist where art_id in (select art_id from role where role.art_id = artist.art_id and role_type = 'composer')");

?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-3 ">
    <div class="form-select" id="tracksort">
    <label for="club_sort">club</label>
    <select class="form-control container-fluid club_check" id="selectartclub" name="userClub">
      <option value="null" selected>All</option>
        <?php
        while($row = mysqli_fetch_array($club_result)):;
        ?>
        <option value="<?php echo $row[1]; ?>"> <?php echo $row[1]; ?> </option>
        <?php endwhile; ?>
    </select>
    <label for="club_sort">Address</label>
    <select class="form-control container-fluid" id="selectartaddress" name="userComposer">
      <option value="null" selected >All</option>
        <?php
        while($row = mysqli_fetch_array($art_address)):;
        ?>
        <option value="<?php echo $row[0]; ?>"> <?php echo $row[0] ?> </option>
        <?php endwhile; ?>
    </select>
    <!-- <button type="submit" id="sorttrackbutton" name="sorttrack">Apply</button> -->
    </div>
    </div>
    <div class="col-sm" >
      <div class="container" id="displayartist">
        <?php
            while($row = mysqli_fetch_array($artist_sql)):;
        ?>
        <div class="row-mt-2 ">
            <div class="row mt-1">
                <h5><?php echo$row['art_firstname'].' '.$row['art_lastname']; ?></h5>
            </div>
            
            <?php 
                $club_id = $row['club_id'];
                // $art_id = $row['art_id'];
                $club_query = mysqli_query($connect,"select * from club where club_id = '$club_id'");
                $club_data = mysqli_fetch_array($club_query);
                // $composer_query = mysqli_query($connect,"select * from artist where art_id = '$art_id'");
                // $composer_data = mysqli_fetch_array($composer_query);
            ?>
            <div class="row-mt-1">
                <h6>Club: <?php echo$club_data['club_name']; ?></h6>
            </div>
            <div class="row-mt-1">
                <h6>Address: <?php echo$row['art_address']; ?></h6>
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