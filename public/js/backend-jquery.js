$(document).ready(function()
    {

//*************************************************************************************************
        $("#CityIdAdd").change(function () {
            //alert ($("#AreaIdAdd").val());
            $.post("./../configs/sqlHelper.php",
            {fun : "getAreaByCityId", id : $("#CityIdAdd").val()},
            function(data,status)
            {
                console.log(data);
                var obj = JSON.parse(data);
                $("#AreaIdAdd").empty();
                $.each(obj,function(key, value)  
                {
                    $("#AreaIdAdd").append(
                    $('<option></option>').val(value.area_id).html(value.area_name)
                    );

                });
                
            });
        });
        //END Add

        //START Edit
        $("#CityIdEdit").change(function () {

           //alert ($("#CityIdEdit").val());
            $.post("./../../configs/sqlHelper.php",
            {fun : "getAreaByCityId", id : $("#CityIdEdit").val()},
            function(data,status)
            {
                console.log(data);
                var obj = JSON.parse(data);
                $("#AreaIdEdit").empty();
                $.each(obj,function(key, value)  
                {
                    $("#AreaIdEdit").append(
                    $('<option></option>').val(value.area_id).html(value.area_name)
                    );

                });
                
            });
        });
//*************************************************************************************************

    });