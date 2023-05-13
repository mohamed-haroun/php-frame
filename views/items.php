<?php

use dispatcher\Response;

$response = new Response();

if (! isset($_SESSION['newShipment'])) {
    $response->redirect('/shipments/new');
}

?>
<div id="liveAlertPlaceholder"></div>
<div class="row">
    <h4 class="shadow bg-white text-primary-emphasis mt-3 p-2 ms-3 fw-bold" style="width: fit-content"><i class="fa-solid fa-boxes-packing fa-fade"></i> Item Data</h4>

    <form class="col-md-12 row gap-3 mx-auto" id="newItem" method="post" action="/shipments/add_items">
        <div class="col-md-6 row my-5 mx-5 border shadow rounded bg-white py-5">
            <div class="col-md-9 mb-2">
                <label for="item" class="form-label">Item Description</label>
                <input type="text" name="item" class="form-control border-primary-subtle" id="item" required autofocus>
            </div>
            <div class="col-md-3 mb-2">
                <label for="invoiceNum" class="form-label">Invoice Number</label>
                <input type="text" name="invoiceNum" class="form-control border-primary-subtle" id="invoiceNum" required>
            </div>
            <div class="col-md-6 mb-2">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="text" name="quantity" class="form-control border-primary-subtle" id="quantity" required>
            </div>
            <div class="col-md-6 mb-2">
                <label for="price" class="form-label">Price Per Ton</label>
                <input type="text" name="price" class="form-control border-primary-subtle" id="price" required>
            </div>
            <div class="col-md-6 mb-2">
                <label for="prodDate" class="form-label">Production Date</label>
                <input type="date" name="prodDate" class="form-control border-primary-subtle" id="prodDate" required>
            </div>
            <div class="col-md-6 mb-2">
                <label for="palletNum" class="form-label">No. of Pallets</label>
                <input type="text" name="palletNum" class="form-control border-primary-subtle" id="palletNum" required>
            </div>
        </div>
        <div class="col-md-4 mx-auto d-flex justify-content-sm-evenly align-content-center align-items-center flex-column-reverse flex-fill my-4">
            <button type="submit" class="btn btn-outline-primary fw-bold w-50 rounded-2 shadow" id="liveAlertBtn">Save Item</button>
            <button type="reset" class="btn btn-outline-danger fw-bold w-50 rounded-2 shadow">New item</button>
            <a type="button" class="btn btn-outline-success fw-bold w-50 rounded-2 shadow" href="/saveShipment" >Save Changes</a>
        </div>

        <div class="position-relative">
            <button type="button" class="btn btn-success position-absolute end-50" id="addPackage"><i class="fa-solid fa-plus fa-beat"></i> Add Package</button>
        </div>

        <h5 class="text-primary-emphasis bg-white p-2 shadow" style="width: fit-content"><i class="fa-solid fa-cubes"></i> Packages Data</h5>

        <div class="col-md-12 gap-1 row ms-auto mb-5" id="packages">

        </div>
    </form>
</div>