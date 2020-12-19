<?php

require_once '../config/connect.php';

$club_addr_sql = mysqli_query($connect,"select distinct club_address from club");

$club_result = mysqli_query($connect,"select * from club");

?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-3 ">
    <div class="form-select" id="clubsort">
    <label for="club_sort">Place</label>
    <select class="form-control container-fluid club_check" id="selectclubaddress" name="userClub">
      <option value="null" selected>All</option>
        <?php
        while($result = mysqli_fetch_array($club_addr_sql)):;
        ?>
        <option value="<?php echo $result[0]; ?>"> <?php echo $result[0]; ?> </option>
        <?php endwhile; ?>
    </select>
    </div>
    </div>
    <div class="col-sm" >
      <div class="container" id="displayclubs">
        <?php
            while($row = mysqli_fetch_array($club_result)):;
        ?>
        <div class="row-mt-2 ">
            <div class="row mt-1">
                <h5><?php echo$row['club_name']; ?></h5>
            </div>
            <div class="row-mt-1">
                <h6><?php echo$row['club_address']; ?></h6>
            </div>
            
        </div>
        <?php endwhile; ?>

      </div>
    </div>
  </div>
</div>