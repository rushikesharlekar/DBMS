$(document).ready(function(){

    $("#reg_snipper").hide();
    $("#selectclubdiv").hide();
    
    
    $("#club").change(function(){
        if($("#club").val()=="yes"){
            $("#selectclubdiv").show();
        }
        else{
            $("#selectclubdiv").hide();
        }
    })
    
    

    $("#reg_button").on('click',function(){

        // validations
        var fname = $("#inputFirstName").val();
        var lname = $("#inputLastName").val();
        var regname = /^[a-zA-Z]{3,20}$/;

        var club = $("#club").val();
        var selclub = $("#selectclub").val();

        

        if(fname==""){
            $("#fnameError").html('Name Required*');
            $("#fnameError").css('color','red');
            $("#fnameError").css('font-size','0.7rem');
            return(false);
        }
        else if(!(fname.match(regname))){
            $("#fnameError").html('Enter Valid Length*');
            $("#fnameError").css('color','red');
            $("#fnameError").css('font-size','0.7rem');
            return(false);
        }
        else{
            $("#fnameError").html('');
        }
            

        if(lname==""){
            $("#lnameError").html('Name Required*');
            $("#lnameError").css('color','red');
            $("#lnameError").css('font-size','0.7rem');
            return(false);
        }
        else if(!(lname.match(regname))){
            $("#lnameError").html('Enter Valid Length*');
            $("#lnameError").css('color','red');
            $("#lnameError").css('font-size','0.7rem');
            return(false);
        }
        else{
            $("#lnameError").html('');
        }

        if(club=="yes"){
            $("#selectclubdiv").show();
            if(selclub==""){
                $("#clubError").html('Select a Club*');
                $("#clubError").css('color','red');
                $("#clubError").css('font-size','0.7rem');
                return(false);
            }
        }
        else{
            $("#clubError").html('');
            $("#selectclubdiv").hide();
        }

        var email = $("#inputEmail").val();
        var regemail = /^[a-z0-9.-_]+@+[a-z]+.+[a-z]$/;

        if(email==""){
            $("#emailError").html('Email Required*');
            $("#emailError").css('color','red');
            $("#emailError").css('font-size','0.7rem');
            return(false);
        }

        else if(!(email.match(regemail))){
            $("#emailError").html('Enter Valid Email*');
            $("#emailError").css('color','red');
            $("#emailError").css('font-size','0.7rem');
            return(false);
        }
        else{
            $("#emailError").html('');
        }


        var password = $("#inputPassword").val();
        

        if(password==""){
            $("#passwordError").html('Password Required*');
            $("#passwordError").css('color','red');
            $("#passwordError").css('font-size','0.7rem');
            return(false);
        }
        // else if(!(password.match(regpassword))){
        //     $("#passwordError").html('Enter valid password*');
        //     $("#passwordError").css('color','red');
        //     $("#passwordError").css('font-size','0.7rem');
        //     return(false);
        // }
        else{
            $("#passwordError").html('');
            $("#reg_button").hide();
            $("#reg_snipper").show();

        }


    // ajax operation
        $.ajax({
            type:'POST',
            url:'web_services/register.php',
            data: $("#reg_form").serialize(),
            success:function(result){
                alert(result);
            }
        })
    
    })
    
    
    
    
    
    })