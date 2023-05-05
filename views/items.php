<div class="row col-md-12">
    <form class="col-md-12 row g-3" id="newItem">
        <div class="col-md-12 row mb-5 w-75 mx-auto border rounded bg-white py-5">
            <h4>Item Data</h4>
            <div class="col-md-9 mb-2">
                <label for="item" class="form-label">Item Description</label>
                <input type="text" name="item" class="form-control" id="item">
            </div>
            <div class="col-md-3 mb-2">
                <label for="invoiceNum" class="form-label">Invoice Number</label>
                <input type="text" name="invoiceNum" class="form-control" id="invoiceNum">
            </div>
            <div class="col-md-6 mb-2">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="text" name="quantity" class="form-control" id="quantity">
            </div>
            <div class="col-md-6 mb-2">
                <label for="price" class="form-label">Price Per Ton</label>
                <input type="text" name="price" class="form-control" id="price">
            </div>
            <div class="col-md-6 mb-2">
                <label for="prodDate" class="form-label">Production Date</label>
                <input type="date" name="prodDate" class="form-control" id="prodDate">
            </div>
            <div class="col-md-6 mb-2">
                <label for="palletNum" class="form-label">Pallets Number</label>
                <input type="text" name="palletNum" class="form-control" id="palletNum">
            </div>
        </div>

        <div class="position-relative">
            <button type="button" class="btn btn-success position-absolute end-0" id="addPackage">Add Package</button>
        </div>
        <hr>

        <h4 class="ma">Packages Data</h4>

        <div class="col-md-12 row mx-auto d-flex justify-content-center" id="packages">

        </div>

        <div class="col-md-9 mx-auto d-flex justify-content-around my-4">
            <button type="submit" class="btn btn-success w-25 rounded-0">Add Item</button>
            <a type="button" class="btn btn-danger w-25 rounded-0" href="/saveShipment">Save Changes</a>
        </div>
    </form>
</div>