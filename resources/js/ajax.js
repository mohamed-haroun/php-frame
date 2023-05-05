$("#show").click(function(){
    $.get("/data?shipment=" + $("#show").attr('shipment'), function(data, status){
        document.getElementById('data_show').innerHTML =  data;
    });
});