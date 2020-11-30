<div class="container text-center">   
    <div class="row" >
    
        <div class="col-sm-5">
            

        </div>
        <div class="col-sm-2 ch_position">
        <!-- <i class="fas fa-headphones-alt fa-4x mb-3"></i> -->
        <h3 class="ch_bold">Login</h3>
        <form>
            <div class="form-group">
                
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted"><i class="fas fa-lock"></i>We'll never share your email with anyone.</small>
            </div>
            <div class="form-group">
                
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            
            <button type="submit" class="btn login_button btn-block">Login</button>
            
        </form>

        <span class="float-center mt-1"><a href="javascript:void(0)" data-toggle="modal" data-target="#registerModal">New Here? Click to register!</a></span>
        </br>
        <span class="float-center mt-1" ><a href="javascript:void(0)" data-toggle="modal" data-target="#passwordModal">Forgot password?</a></span>
        
        
        </div>
        <div class="col-sm-5">
           

        </div>
    </div>
</div>



<!-- Registration Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="reg_form">
            <div class="form-group">   
                <input type="text" class="form-control" id="inputFirstName" placeholder="First Name" name="userFirstName">
                <span id="fnameError" class="ch_error"></span>
                </div>
            <div class="form-group">   
                <input type="text" class="form-control" id="inputLastName" placeholder="Last Name" name="userLastName">
                <span id="lnameError"></span>
                </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="male">
                    <input type="radio" class="form-check-input" id="male" name="userGender" value="Male" checked>Male
                </label>
                </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="female">
                    <input type="radio" class="form-check-input" id="female" name="userGender" value="Female">Female
                </label>
                </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="others">
                    <input type="radio" class="form-check-input" id="others" name="userGender" value="Others">Others
                </label>
                </div>
            <div class="form-check mb-2">
            <label for="selectclub">Select User Type :</label>
                <select class="form-control" id="club" name="ifClub">
                        <option value="no" selected>Public</option>
                        <option value="yes">Club Member</option>
                    </select>
                </div>
            <div class="form-group" id="selectclubdiv">
                <label for="selectclub">Select Your Club :</label>
                <select class="form-control" id="selectclub" name="userClub">
                    <option value="0" selected>No</option>
                    <option value="1">Yes</option>
                <span id="clubError"></span>
                </select>
            </div>
            <div class="form-group">   
                <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Email" name="userEmail">
                <span id="emailError"></span>
                </div>
            <div class="form-group">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="userPassword">
                <span id="passwordError"></span>
            </div>

        </form>
      </div>
      <div class="modal-footer">
        
        <button type="button reg_button" class="btn btn-primary" id="reg_button">Register</button>
        <button class="btn reg_button" id="reg_snipper" type="button" disabled>
        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" disable></span>
        Please wait....
        </button>
      </div>
    </div>
  </div>
</div>


<!-- Forgot Password Modal -->
<div class="modal fade" id="passwordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Reset Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
        <form>
            <div class="form-group">   
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
            <div class="form-group">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="New Password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="New Password">
            </div>
        </form>
        </div>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary">Reset</button>
      </div>
    </div>
  </div>
</div>