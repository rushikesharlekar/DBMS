<?php include_once '../web_services/checkadminlogin.php'?>

<?php include_once 'templates/header.php'?>

<?php
 require_once '../config/connect.php';

 $composer_result = mysqli_query($connect,"select * from artist where art_id in (select art_id from role where role.art_id = artist.art_id and role_type = 'composer')");

 ?>


<div class="container-fluid">
    <button type="submit" class="btn custom_button mt-1 btn-block container-fluid" href="javascript:void(0)" data-toggle="modal" data-target="#addclubModal" >Add New Club</button>
    <!-- <button class="custombutton mt-1" type="button"><a href="javascript:void(0)" data-toggle="modal" data-target="#addtrackModal">Edit Existing Track</a></button> -->
    <!-- <button class="custombutton mt-1" type="button"><a href="javascript:void(0)" data-toggle="modal" data-target="#addtrackModal">Delete Track</a></button> -->
</div>




<!-- add track modal -->
<div class="modal fade" id="addclubModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Club</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" id="add_club_form">
        <div class="form-group">   
            <input type="text" class="form-control" id="inputClubName" placeholder="Club Name" name="inputClubName">
            <span id="cnameError" class="ch_error"></span>
            </div>
        <div class="form-group" id="selectclubdiv">
            <input type="text" class="form-control" id="inputClubAddress" placeholder="Address" name="inputClubAddress">
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <p class="float-left" id="club_add_msg"></p>
        <button type="submit " class="btn custom_button btn-block" id="addClubBtn" name="addTrackBtn"><i class="fas fa-plus-circle"></i>Add</button>
      </div>
    </div>
  </div>
</div>



<?php include_once 'templates/footer.php'?>