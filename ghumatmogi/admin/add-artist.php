<?php include_once '../web_services/checkadminlogin.php'?>

<?php include_once 'templates/header.php'?>

<?php
 require_once '../config/connect.php';

 $club_result = mysqli_query($connect,"select * from club");
 
 ?>


<div class="container-fluid">
    <button type="submit" class="btn custom_button mt-1 btn-block container-fluid" href="javascript:void(0)" data-toggle="modal" data-target="#addartistModal" >Add New Artist</button>
    <!-- <button class="custombutton mt-1" type="button"><a href="javascript:void(0)" data-toggle="modal" data-target="#addtrackModal">Edit Existing Track</a></button> -->
    <!-- <button class="custombutton mt-1" type="button"><a href="javascript:void(0)" data-toggle="modal" data-target="#addtrackModal">Delete Track</a></button> -->
</div>




<!-- add track modal -->
<div class="modal fade" id="addartistModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Artist</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" id="add_artist_form">
        <div class="form-group">   
            <input type="text" class="form-control" id="inputArtistFirstName" placeholder="First Name" name="inputArtistFirstName">
            <span id="fnameError" class="ch_error"></span>
        </div>
        <div class="form-group">   
            <input type="text" class="form-control" id="inputArtistLastName" placeholder="Last Name" name="inputArtistLastName">
            <span id="lnameError" class="ch_error"></span>
        </div>
        <div class="form-group" id="selectclubdiv">
            <input type="text" class="form-control" id="inputArtistAddress" placeholder="Address" name="inputArtistAddress">
        </div>
        <div class="form-group" id="selectclubdiv">
            <label for="selectclub">Club :</label>
            <select class="form-control" id="inputcluboption" name="inputcluboption">
                <option value="" selected disabled></option>
                <?php
                while($row = mysqli_fetch_array($club_result)):;
                ?>
                <option value="<?php echo $row[0]; ?>"> <?php echo $row[1]; ?> </option>
                <?php endwhile; ?>
            <span id="clubError"><?php echo @$message ?></span>
            </select>
        </div>
        <div class="form-group form-check-inline" id="selectrole1">
            <label for="selectclub">Role 1:</label>
            <select class="form-control" id="inputrole_1" name="inputrole_1">
                <option value="" selected disabled></option>
                <option value="singer">singer</option>
                <option value="ghumat">ghumat</option>
                <option value="shamel">shamel</option>
                <option value="kasale">kasale</option>
                <option value="composer">composer</option>
            <span id="composerError"><?php echo @$message ?></span>
            </select>
        </div>
        <div class="form-group form-check-inline" id="selectrole2">
            <label for="selectclub">Role 2:</label>
            <select class="form-control" id="inputrole_2" name="inputrole_2">
                <option value="" selected disabled></option>
                <option value="singer">singer</option>
                <option value="ghumat">ghumat</option>
                <option value="shamel">shamel</option>
                <option value="kasale">kasale</option>
                <option value="composer">composer</option>
            </select>
        </div>
        <div class="form-group form-check-inline" id="selectrole3">
            <label for="selectclub">Role 3:</label>
            <select class="form-control" id="inputrole_3" name="inputrole_3">
                <option value="" selected disabled></option>
                <option value="singer">singer</option>
                <option value="ghumat">ghumat</option>
                <option value="shamel">shamel</option>
                <option value="kasale">kasale</option>
                <option value="composer">composer</option>
            </select>
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <p class="float-left" id="track_add_msg"></p>
        <button type="submit " class="btn custom_button btn-block" id="addArtistBtn" name="addTrackBtn"><i class="fas fa-plus-circle"></i>Add</button>
      </div>
    </div>
  </div>
</div>



<?php include_once 'templates/footer.php'?>