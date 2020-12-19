$(document).ready(function(){

    $("#selectclub").on('change',function(){
        // salert("hello");
        var action = 'data1';
        var club =  $("#selectclub").val();
        var composer =  $("#selectcomposer").val();

        $.ajax({

            url: "../web_services/filtertrack.php",
            method: "POST",
            data: {
                action: action,
                club: club,
                composer: composer
            },
            success: function(response) {
                // alert(response);
                $("#displaytracks").html(response);
                // $("#loader").hide();
                // $("#textChange").text("Filtered Products");

            }

        });
    })

    $("#selectcomposer").on('change',function(){
        // salert("hello");
        var action = 'data2';
        var club =  $("#selectclub").val();
        var composer =  $("#selectcomposer").val();

        $.ajax({

            url: "../web_services/filtertrack.php",
            method: "POST",
            data: {
                action: action,
                club: club,
                composer: composer
            },
            success: function(response) {
                // alert(response);
                $("#displaytracks").html(response);
                // $("#loader").hide();
                // $("#textChange").text("Filtered Products");

            }

        });
    })


    $("#selectclubaddress").on('change',function(){
        // salert("hello");
        var action = 'data';
        var address =  $("#selectclubaddress").val();

        $.ajax({

            url: "../web_services/filterclub.php",
            method: "POST",
            data: {
                action: action,
                address: address,
            },
            success: function(response) {
                // alert(response);
                $("#displayclubs").html(response);
                // $("#loader").hide();
                // $("#textChange").text("Filtered Products");

            }

        });
    })

    $("#selectartclub").on('change',function(){
        // salert("hello");
        var action = 'data1';
        var club =  $("#selectartclub").val();
        var address =  $("#selectartaddress").val();

        $.ajax({

            url: "../web_services/filterartist.php",
            method: "POST",
            data: {
                action: action,
                club: club,
                address: address
            },
            success: function(response) {
                // alert(response);
                $("#displayartist").html(response);
                // $("#loader").hide();
                // $("#textChange").text("Filtered Products");

            }

        });
    })

    $("#selectartaddress").on('change',function(){
        // salert("hello");
        var action = 'data2';
        var club =  $("#selectartclub").val();
        var address =  $("#selectartaddress").val();

        $.ajax({

            url: "../web_services/filterartist.php",
            method: "POST",
            data: {
                action: action,
                club: club,
                address: address
            },
            success: function(response) {
                // alert(response);
                $("#displayartist").html(response);
                // $("#loader").hide();
                // $("#textChange").text("Filtered Products");

            }

        });
    })


})