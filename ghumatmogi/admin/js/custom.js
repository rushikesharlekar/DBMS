$(document).ready(function(e){



    $("#addTrackBtn").on('click',function(){
        // alert(e);
        
        var trackname = $("#inputTrackName").val();
        var clubname = $("#inputcluboption").val();
        var composerkname = $("#inputcomposeroption").val();
        var trackalbum = "NULL";

        if(trackname==""){
            $("#tnameError").html('Track name Required*');
            $("#tnameError").css('color','red');
            $("#tnameError").css('font-size','0.7rem');
            return(false);
        }
        else{
            $("#tnameError").html('');
        }

        
        $.ajax({
            type: 'POST',
            url: '../web_services/addtrack.php',
            data: $("#add_track_form").serialize(),
            // dataType: "json",
            success: function (result) {
                // alert('hello');
                alert(result.status);
                if(result.status=='fail'){
                    alert(result.status);
                    // $("#emailError").html("Email already exist. Please try another email.");
                    // $("#emailError").css('color','red');
                    // $("#emailError").css('font-size','0.7rem');
                    // $("#reg_button").show();
                    // $("#reg_snipper").hide();
                }
                else if(result.status=='failure'){
                    alert(result.status);
                    // $("$emailError").html("Oops something went wrong. Please contact the admin. Sorry for the inconvinience");
                }
                else if(result.status=='success'){
                    alert(result.status);
                    // $("#reg_msg").html("Registration Successfull. Try logging in.");
                    // $("#reg_snipper").hide(); 
                    // $("#login_snipper").hide();

                }
            }
        });
        
    })


    $("#addClubBtn").on('click',function(){
        // alert(e);
        
        var clubname = $("#inputClubName").val();
        var clubaddress = $("#inputClubAddress").val();

        if(clubname==""){
            $("#cnameError").html('Track name Required*');
            $("#cnameError").css('color','red');
            $("#cnameError").css('font-size','0.7rem');
            return(false);
        }
        else{
            $("#cnameError").html('');
        }

        
        $.ajax({
            type: 'POST',
            url: '../web_services/addclub.php',
            data: $("#add_club_form").serialize(),
            // dataType: "json",
            success: function (result) {
                // alert('hello');
                alert(result.status);
                if(result.status=='fail'){
                    alert(result.status);
                    $("#cnameError").html("Club already exist. Please try another email.");
                    $("#cnameError").css('color','red');
                    $("#cnameError").css('font-size','0.7rem');
                    // $("#reg_button").show();
                    // $("#reg_snipper").hide();
                }
                else if(result.status=='failure'){
                    alert(result.status);
                    // $("$emailError").html("Oops something went wrong. Please contact the admin. Sorry for the inconvinience");
                }
                else if(result.status=='success'){
                    alert(result.status);
                    // $("#reg_msg").html("Registration Successfull. Try logging in.");
                    // $("#reg_snipper").hide(); 
                    // $("#login_snipper").hide();
                    $("#cnameError").html("");
                    $("#inputTrackName").val().html('');
                    $("#inputcluboption").val().html('');

                    $("#track_add_msg").html("Club Added. Enter new club details.");
                    
                }
            }
        });
        
    })

    $("#addArtistBtn").on('click',function(){
        // alert(e);
        
        var artistfirstname = $("#inputArtistFirstName").val();
        var artistlastname = $("#inputArtistLastName").val();
        var artistaddresss = $("#inputArtistAddress").val();
        var artistclub = $("#inputcluboption").val();
        var artisrole = $("#selectrole1").val();

        // if(clubname==""){
        //     $("#cnameError").html('Track name Required*');
        //     $("#cnameError").css('color','red');
        //     $("#cnameError").css('font-size','0.7rem');
        //     return(false);
        // }
        // else{
        //     $("#cnameError").html('');
        // }

        
        $.ajax({
            type: 'POST',
            url: '../web_services/addartist.php',
            data: $("#add_artist_form").serialize(),
            // dataType: "json",
            success: function (result) {
                // alert('hello');
                alert(result.status);
                if(result.status=='fail'){
                    // alert(result.status);
                    // $("#cnameError").html("Club already exist. Please try another email.");
                    // $("#cnameError").css('color','red');
                    // $("#cnameError").css('font-size','0.7rem');
                    // $("#reg_button").show();
                    // $("#reg_snipper").hide();
                }
                else if(result.status=='failure'){
                    // alert(result.status);
                    // $("$emailError").html("Oops something went wrong. Please contact the admin. Sorry for the inconvinience");
                }
                else if(result.status=='success'){
                    // alert(result.status);
                    // $("#reg_msg").html("Registration Successfull. Try logging in.");
                    // $("#reg_snipper").hide(); 
                    // $("#login_snipper").hide();
                    // $("#cnameError").html("");
                    // $("#inputTrackName").val().html('');
                    // $("#inputcluboption").val().html('');

                    // $("#track_add_msg").html("Club Added. Enter new club details.");
                    $("#addartistmodal").hide();
                    
                }
            }
        });
        
    })

})