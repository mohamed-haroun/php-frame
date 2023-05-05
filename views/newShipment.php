<?php
use bootstrap\Application;

$conn = Application::dbConnect();
// Getting data to auto complete the form
// 1. Consignee Data
$comQuery = "SELECT id, company_name FROM company order by id desc";
$comStmt = $conn->prepare($comQuery);
$comResult = $comStmt->executeQuery();
$companies = $comResult->fetchAllAssociative();

// 2. Shipment office data
$lineQuery = "SELECT id, line_name FROM shipping_line";
$lineStmt = $conn->prepare($lineQuery);
$lineResult = $lineStmt->executeQuery();
$lines = $lineResult->fetchAllAssociative();
?>

<div class="border border-warning p-3">
    <form class="row" method="post" enctype="multipart/form-data" action="/new_shipment">
        <div class="col-md-8 row mx-auto">
            <h4 class="text-primary mb-3 text-decoration-underline">Shipment Main Data</h4>
            <div class="col-md-12 mb-3">
                <label for="description" class="form-label">Shipment Description</label>
                <input type="text" name="description" placeholder="e.g. Kind of crops you export or import"
                    class="form-control" id="description" required>
            </div>
            <div class="col-md-12 mb-3">
                <label for="shipper" class="form-label">Shipper Company</label>
                <select id="shipper" name="shipper" class="form-select" required>
                    <?php
                    foreach (array_reverse($companies) as $company) {
                        echo "<option value='{$company['id']}'>{$company['company_name']}</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-12 mb-3">
                <label for="consignee" class="form-label">Consignee Company</label>
                <select id="consignee" name="consignee" class="form-select" required>
                    <?php
                    foreach ($companies as $company) {
                        echo "<option value='{$company['id']}'>{$company['company_name']}</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="col-md-4 mb-3">
                <label for="shippedBy" class="form-label">Shipped By</label>
                <input type="text" name="shippedBy" placeholder="e.g. Sea, Air, Truck" class="form-control"
                    id="shippedBy" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="pol" class="form-label">Port Of Loading</label>
                <input type="text" name="pol" placeholder="e.g. Ports, Airports" class="form-control" id="pol">
            </div>
            <div class="col-md-4 mb-3">
                <label for="pod" class="form-label">Port Of Delivery</label>
                <input type="text" name="pod" placeholder="e.g. Ports, Airports" class="form-control" id="pod">
            </div>

            <div class="col-md-4 mb-3">
                <label for="trackingNum" class="form-label">Tracking Number</label>
                <input type="text" name="trackingNum" placeholder="Tracking Number" class="form-control"
                    id="trackingNum">
            </div>
            <div class="col-md-4 mb-3">
                <label for="line" class="form-label">Shipping Line</label>
                <select id="line" name="line" class="form-select">
                    <?php
                    foreach ($lines as $line) {
                        echo "<option value='{$line['id']}'>{$line['line_name']}</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <label for="office" class="form-label">Shipping Office</label>
                <input type="text" name="office" placeholder="office name" class="form-control" id="office">
            </div>
            <div class="col-md-4 mb-3">
                <label for="lot" class="form-label">Lot Number</label>
                <input type="text" name="lot" placeholder="e.g. [1..9][a..Z]" class="form-control" id="lot">
            </div>
            <div class="col-md-4 mb-3">
                <label for="dhl" class="form-label">DHL Number</label>
                <input type="text" name="dhl" placeholder="DHL Number" class="form-control" id="dhl">
            </div>
            <div class="col-md-4 mb-3">
                <label for="mode" class="form-label">Shipment Mode</label>
                <select id="mode" name="mode" class="form-select">
                    <option value="export">Export</option>
                    <option value="import">Import</option>
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <label for="lineNum" class="form-label">B/L Number</label>
                <input type="text" name="lineNum" placeholder="Line number" class="form-control" id="lineNum">
            </div>
            <div class="col-md-8 mb-3">
                <label for="bill" class="form-label">Bill of Landing</label>
                <input type="file" name="bill" class="form-control" id="bill">
            </div>
        </div>
        <div class="col-md-12 my-3 text-center">
            <button type="submit" class="btn btn-success col-md-4">Create New Shipment</button>
        </div>
    </form>
</div>