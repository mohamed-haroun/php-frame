$(document).ready(function () {
    $('#example').DataTable();
});

window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 3000);

let num = 0;
$("#addPackage").click( function () {

    num++;

    let occur = $("#addPackage").val();

        let item = `
        <div class="col-md-4 border p-2 m-2">
        <h6 class="text-primary-emphasis">Package ${num}</h6>
        <div class="col-md-12">
            <label for="packageNum${num}" class="form-label">No. Packages</label>
            <input type="text" name="packageNum${num}" class="form-control" id="packageNum${num}">
        </div>
        <div class="col-md-12">
            <label for="packageType${num}" class="form-label">Type of Packages</label>
            <input type="text" name="packageType${num}" class="form-control" id="packageType${num}">
        </div>
        <div class="col-md-12">
            <label for="nw${num}" class="form-label">Net Weight</label>
            <input type="text" name="nw${num}" class="form-control" id="nw${num}">
        </div>
        <div class="col-md-12">
            <label for="gw${num}" class="form-label">Gross Weight</label>
            <input type="text" name="gw${num}" class="form-control" id="gw${num}">
        </div>
        </div>
        
`;

        $('#packages').append(item);
});

$("#newShipment").on('submit', function (event) {
    let dataString = $(this).serialize();

    $.ajax({
        type: "POST",
        url: "/new_shipment",
        data: dataString,
        success: function (){
            alert("Shipment is added Successfully")
        }
    });
});

$("#newItem").on('submit', function (event) {
    let dataString = $(this).serialize();

    $.ajax({
        type: "POST",
        url: "/shipments/add_items",
        data: dataString,
        error: function (request, error) {
            alert(" Can't do because: " + error);
        },
        success: function (){
            alert("Item is added Successfully");
        }
    });
});