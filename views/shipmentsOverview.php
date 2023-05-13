<?php

/**
 * @var Shipments $shipment
 * @var Statuses $status
 */

use bootstrap\Application;
use models\Company;
use models\Shipments;
use models\ShippingLine;
use models\Statuses;

$entityManager = Application::getDB()->entityManager();
$shipments = $entityManager->getRepository(Shipments::class)->findAll();

?>

<div class="my-1 p-2">
    <h3 class="text-primary-emphasis">Shipments Overview</h3>
    <div class="d-flex justify-content-end mb-3">
        <a href="/shipments/new" class="btn btn-outline-primary"><i class="fa-solid fa-circle-plus"></i> New
            Shipment</a>
    </div>
    <div class="my-2 data_table overflow-x-auto">
        <table id="example" class="table table-striped table-bordered text-nowrap">
            <thead>
                <tr>
                    <th>Shipment Description</th>
                    <th>Consignee</th>
                    <th>B/L</th>
                    <th>Tracking No.</th>
                    <th>DHL</th>
                    <th>Office</th>
                    <th>Line</th>
                    <th>Loading Date</th>
                    <th>Arrival Date</th>
                    <th>Delivery Date</th>
                    <th>Relies Date</th>
                    <th>Certificate NO.</th>
                    <th>Certificate Date</th>
                    <th>incoming NO.</th>
                    <th>Exchange Data</th>
                    <th>Documented</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($shipments as $shipment) {
                    // Shipments data that exist in the created state of the shipment
                    $trackingNum = $shipment->getTrackingNumber();
                    if (!isset($trackingNum)) {
                        $trackingNum = " ";
                    }

                    // Certificate Data
                    $certificate = $shipment->getCertificate();
                    $certificateNumber = "";
                    $certificateDate = "";
                    if (isset($certificate)) {
                        $certificateNumber = $certificate->getCertificateNumber();
                        $certificateDate = $certificate->getCertificateDelivery()->format('Y-m-d');
                    }

                    // Check if the shipment is documented
                    $documented = "";
                    if ($shipment->getDocumented()) {
                        $documented = '<i class="fa-regular text-success fa-circle-check fa-2xl"></i>';
                    } else {
                        $documented = '<i class="fa-regular text-danger fa-circle-xmark fa-2xl"></i>';
                    }

                    $shippingLine = $entityManager->find(ShippingLine::class, $shipment->getShippingLineId());
                    $consignee = $entityManager->find(Company::class, $shipment->getConsigneeId());

                    // Getting policy number if policy is existed
                    $policy = $shipment->getPolicies();
                    $policyNum = "";
                    if (isset($policy)) {
                        $policyNum = $policy->getPolicyNumber();
                    }

                    $statuses = $shipment->getStatues();
                    $loadingAt = null;
                    $arrivalAt = null;
                    $deliveryAt = null;
                    foreach ($statuses as $status) {
                        if ($status->getShipmentStatus()->value == 'Loaded') {
                            $loadingAt = $status->getStatusDate()->format('Y-m-d');
                        }

                        if ($status->getShipmentStatus()->value == 'Arrived') {
                            $arrivalAt = $status->getStatusDate()->format('Y-m-d');
                        }

                        if ($status->getShipmentStatus()->value == 'Delivered') {
                            $deliveryAt = $status->getStatusDate()->format('Y-m-d');
                        }
                    }

                    if ($shipment->getReliesDate()) {
                        $reliesDate = $shipment->getReliesDate()->format('Y-m-d');
                    } else {
                        $reliesDate = "";
                    }


                    echo "<tr>";
                    echo "<td><a href='/shipments/details?shipment={$shipment->getId()}'  class='border-0 link-primary'>" . $shipment->getShipmentDescription() . "</a></td>";
                    echo "<td>" . $consignee->getCompanyName() . "</td>";
                    echo "<td>" . $policyNum . "</td>";
                    echo "<td>" . $trackingNum . "</td>";
                    echo "<td>" . $shipment->getDhl() . "</td>";
                    echo "<td>" . $shipment->getShipmentOffice() . "</td>";
                    echo "<td>" . $shippingLine->getLineName() . "</td>";
                    echo "<td>" . $loadingAt . "</td>";
                    echo "<td>" . $arrivalAt . "</td>";
                    echo "<td>" . $deliveryAt . "</td>";
                    echo "<td>" . $reliesDate . "</td>";
                    echo "<td>" . $certificateNumber . "</td>";
                    echo "<td>" . $certificateDate . "</td>";
                    echo "<td>" . $shipment->getIncomingNumber() . "</td>";
                    echo "<td>" . $shipment->getExchangeData() . "</td>";
                    echo "<td class='text-center align-self-center'>" . $documented . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>

        </table>
    </div>
    <div id="data_show"></div>
</div>