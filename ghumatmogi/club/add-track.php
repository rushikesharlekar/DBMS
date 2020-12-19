<?php include_once '../web_services/checkclublogin.php'?>

<?php
 require_once '../config/connect.php';

 $email = $_SESSION['email'];
 $club_result = mysqli_query($connect,"select * from club where club_id in (select club from user where email = '$email' and role = 'club')");

 $composer_result = mysqli_query($connect,"select * from artist where art_id in (select art_id from role where role.art_id = artist.art_id and role_type = 'composer')");

 
 ?>

 <?php include_once 'templates/header.php' ?>


<div class="container-fluid">
    <button type="submit" class="btn custom_button mt-1 btn-block container-fluid" href="javascript:void(0)" data-toggle="modal" data-target="#addtrackModal" >Add New Track</button>
    <!-- <button class="custombutton mt-1" type="button"><a href="javascript:void(0)" data-toggle="modal" data-target="#addtrackModal">Edit Existing Track</a></button> -->
    <!-- <button class="custombutton mt-1" type="button"><a href="javascript:void(0)" data-toggle="modal" data-target="#addtrackModal">Delete Track</a></button> -->
</div>




<!-- add track modal -->
<div class="modal fade" id="addtrackModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Track</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" id="add_track_form">
        <div class="form-group">   
            <input type="text" class="form-control" id="inputTrackName" placeholder="Track Name" name="inputTrackName">
            <span id="tnameError" class="ch_error"></span>
            </div>
        <div class="form-group" id="selectclubdiv">
            <label for="selectclub">Club :</label>
            <select class="form-control" id="inputcluboption" name="inputcluboption">
              <?php
              while($row = mysqli_fetch_array($club_result)):;
              ?>
              <option value="<?php echo $row[0]; ?>"> <?php echo $row[1]; ?> </option>
              <?php endwhile; ?>
            <span id="clubError"><?php echo @$message ?></span>
            </select>
        </div>
        <div class="form-group" id="selectcompdiv">
            <label for="selectclub">Composer :</label>
            <select class="form-control" id="inputcomposeroption" name="inputcomposeroption">
              <option value="" selected disabled></option>
              <?php
              while($row = mysqli_fetch_array($composer_result)):;
              ?>
              <option value="<?php echo $row[0]; ?>"> <?php echo $row[1]; ?> </option>
              <?php endwhile; ?>
            <span id="composerError"><?php echo @$message ?></span>
            </select>
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <p class="float-left" id="track_add_msg"></p>
        <button type="submit " class="btn custom_button btn-block" id="addTrackBtn" name="addTrackBtn">Add</button>
      </div>
    </div>
  </div>
</div>



<?php include_once 'templates/footer.php'?>