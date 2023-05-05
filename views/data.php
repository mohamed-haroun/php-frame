<?php

use bootstrap\Application;
function getData(string $query, array $search): array|bool
{
    [$param, $value] = $search;
    $conn = Application::dbConnect();
    $stmt = $conn->prepare($query);
    $stmt->bindValue($param, $value);
    return $stmt->executeQuery()->fetchAssociative();
}

$query = "SELECT * FROM items where shipments_id = :shipment";

$items = false;

if (isset($_GET['shipment'])) {
    $items = getData($query, [":shipment", $_GET['shipment']] ?? '');
}

if ($items) {
    $policy = <<<CARD
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Shipment Items</h5>
    <p><span class="text-primary">Description:</span> {$items['item_description']}</p>
    <p>qunatity: {$items['quantity']} kg</p>
    <p>price: {$items['price_per_ton']} $ per ton</p>
    <p>production: {$items['production_date']}</p>
    <p>pallets : {$items['pallets_number']}</p>
  </div>
</div>
CARD;

    echo $policy;
} else {
    echo "<p class='text-danger'>No Items is added yet</p>";
}