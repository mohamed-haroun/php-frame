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
$lineQuery = "SELECT id, line_name FROM shippingLine";
$lineStmt = $conn->prepare($lineQuery);
$lineResult = $lineStmt->executeQuery();
$lines = $lineResult->fetchAllAssociative();
?>

    <div class="rounded-3 bg-white shadow mx-auto p-5 my-3 w-50">
        <form method="post" action="/shipments/create" enctype="multipart/form-data" id="newShipment">
            <div class=" col-md-12 row mx-auto">
                <h4 class="text-primary mb-3">Shipment Main Data <i class="fa-solid fa-box fa-fade"></i></h4>
                <div class="col-md-12 mb-4">
                    <label for="description" class="form-label">Shipment Description</label>
                    <input type="text" name="description" class="form-control border-primary-subtle" id="description"
                        required>
                </div>
                <div class="col-md-12 mb-4">
                    <label for="shipper" class="form-label">Shipper Company</label>
                    <select id="shipper" name="shipper" class="form-select border-primary-subtle" required>
                        <?php
                        foreach (array_reverse($companies) as $company) {
                            echo "<option value='{$company['id']}'>{$company['company_name']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-12 mb-4">
                    <label for="consignee" class="form-label">Consignee Company</label>
                    <select id="consignee" name="consignee" class="form-select border-primary-subtle" required>
                        <?php
                        foreach ($companies as $company) {
                            echo "<option value='{$company['id']}'>{$company['company_name']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-4 mb-4">
                    <label for="mode" class="form-label">Shipment Mode</label>
                    <select id="mode" name="mode" class="form-select border-primary-subtle">
                        <option value="Export">Export</option>
                        <option value="Import">Import</option>
                    </select>
                </div>
                <div class="col-md-4 mb-4">
                    <label for="shippedBy" class="form-label">Shipping By</label>
                    <select id="shippedBy" name="shippedBy" class="form-select border-primary-subtle">
                        <option value="Sea" selected>Sea</option>
                        <option value="Air">Air</option>
                        <option value="Truck">Truck</option>
                    </select>
                </div>
                <div class="col-md-4 mb-4">
                    <label for="office" class="form-label">Shipping Office</label>
                    <input type="text" name="office" class="form-control border-primary-subtle" id="office">
                </div>
                <div class="col-md-6 mb-4">
                    <label for="pol" class="form-label">Port Of Loading</label>
                    <input type="text" name="pol" class="form-control border-primary-subtle" id="pol">
                </div>
                <div class="col-md-6 mb-4">
                    <label for="pod" class="form-label">Port Of Delivery</label>
                    <input type="text" name="pod" class="form-control border-primary-subtle" id="pod">
                </div>
                <div class="col-md-6 mb-4">
                    <label for="line" class="form-label">Shipping Line</label>
                    <select id="line" name="line" class="form-select border-primary-subtle">
                        <?php
                        foreach ($lines as $line) {
                            echo "<option value='{$line['id']}'>{$line['line_name']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-6 mb-4">
                    <label for="dhl" class="form-label">DHL Number</label>
                    <input type="text" name="dhl" class="form-control border-primary-subtle" id="dhl">
                </div>
                <div class="col-md-12 my-3 text-center">
                    <button type="submit" class="btn btn-success fw-bold rounded-1 p-2" id="#btnSubmit">Create New Shipment</button>
                </div>
            </div>
        </form>
    </div>