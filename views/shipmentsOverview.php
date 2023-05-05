<?php

use bootstrap\Application;

$conn = Application::dbConnect();
$query = "SELECT * 
FROM shipments sh LEFT OUTER JOIN company c on sh.consignee_id = c.id
left join policies p on sh.id = p.shipments_id
left join shipping_line so on so.id = sh.shipping_line_id";

$stmt = $conn->executeQuery($query);

$result = $stmt->fetchAllAssociative();
?>


<div class="my-5">
    <div class="d-flex justify-content-end mb-3">
        <a href="/shipments/new" class="btn btn-outline-primary"><i class="fa-solid fa-circle-plus"></i> New Shipment</a>
    </div>
    <div class="my-2">
        <table id="example" class="table table-striped">
            <thead>
                <tr>
                    <th>Shipment Description</th>
                    <th>Consignee</th>
                    <th>Policy No.</th>
                    <th>Tracking No.</th>
                    <th>Shipping Line</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($result as $shipment) {
                    echo "<tr>";
                    echo "<td><button id='show' shipment='{$shipment['id']}' class='border-0 link-primary'>" . $shipment['shipment_description'] . "</button></td>";
                    echo "<td>" . $shipment['company_name'] . "</td>";
                    echo "<td>" . $shipment['policy_number'] . "</td>";
                    echo "<td>" . $shipment['tracking_number'] . "</td>";
                    echo "<td>" . $shipment['line_name'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Shipment Description</th>
                    <th>Consignee</th>
                    <th>Policy No.</th>
                    <th>Tracking No.</th>
                    <th>Shipping Line</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div id="data_show"></div>
</div>