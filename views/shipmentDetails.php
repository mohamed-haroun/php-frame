<?php
declare(strict_types=1);
use bootstrap\Application;
use bootstrap\Utilities;
use models\Company;
use models\Contacts;
use models\Documents;
use models\Invoices;
use models\Items;
use models\Notes;
use models\Packages;
use models\Policies;
use models\Postponements;
use models\Shipments;
use models\ShippingLine;
use models\Statuses;

/**
 * @var Shipments $shipment
 * @var Company $shipper
 * @var Company $consignee
 * @var Statuses $status
 * @var Contacts $consigneeContact
 * @var Items $item
 * @var Packages $package
 * @var Notes $note
 * @var Policies $policy
 * @var Postponements $postponement
 * @var Invoices $invoice
 * @var Documents $document
 */

$entityManager = Application::getDB()->entityManager();
if (isset($_SESSION['shipment'])) {
    $shipment = unserialize($_SESSION['shipment']) ?? null;
    $shipment = $entityManager->find(Shipments::class, $shipment->getId());

    $shipper = $entityManager->find(Company::class, $shipment->getShipperId());
    $shipperContacts = $shipper->getContacts();

    $consignee = $entityManager->find(Company::class, $shipment->getConsigneeId());
    $consigneeContacts = $consignee->getContacts()->getValues();
    $consigneeMail = '';
    foreach ($consigneeContacts as $consigneeContact) {
        if ($consigneeContact->getContactType() == 'mail') {
            $consigneeMail = $consigneeContact->getContact();
        }
    }

    $createdAt = null;
    $loadedAt = null;
    $deliveredAt = null;
    $arrivedAt = null;
    $invoicedAt = null;

    $progress = 0.0;

    // Shipment Statuses
    $statuses = $shipment->getStatues();
    foreach ($statuses as $status) {
        if ($status->getShipmentStatus()->value == 'Created') {
            $createdAt = $status->getStatusDate();
            $progress = 25;
        }
        if ($status->getShipmentStatus()->value == 'Loaded') {
            $loadedAt = $status->getStatusDate();
            $progress = 50;
        }
        if ($status->getShipmentStatus()->value == 'Arrived') {
            $arrivedAt = $status->getStatusDate();
            $progress = 75;
        }
        if ($status->getShipmentStatus()->value == 'Delivered') {
            $deliveredAt = $status->getStatusDate();
            $progress = 100;
        }
    }

    // Getting the policy info if found
    $policy = $shipment->getPolicies();
    $policyNum = "Not Uploaded Yet";
    if (isset($policy)) {
        $policyNum = $policy->getPolicyNumber();
    }

    // Items Details
    $items = $shipment->getItems();

    // Shipping Line
    $shippingLine = $entityManager->find(ShippingLine::class, $shipment->getShippingLineId());

    // All Shipping Lines
    $shippingLines = $entityManager->getRepository(ShippingLine::class)->findAll();

    // Notes
    $notes = $shipment->getNotes();

} else {
    $shipment = null;
}
if (isset($shipment)):
    ?>
    <div class="p-2">
        <div id="showMessage"></div>
        <div class="d-flex justify-content-between">
            <h4 class="text-secondary-emphasis bg-white my-2 p-2 shadow fw-bold rounded">
                <?php echo $shipment->getShipmentDescription() ?>
            </h4>
            <div class="my-2">
                <a class="btn btn-outline-success" target="_blank" href="<?php echo $shippingLine->getTrackingPath() . $shipment->getTrackingNumber()?>">Track</a>
            </div>
            <div class="my-3 form-check" style="width: fit-content">
                <input type="checkbox" class="form-check-input fs-4" id="documented" <?php
                $documented = $shipment->getDocumented();
                echo isset($documented) ? 'checked' : '';
                ?>>
                <label class="form-check-label fs-4" for="documented">Documented</label>
            </div>
        </div>


        <ul class="nav nav-tabs" id="ship-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="details-tab" data-bs-toggle="tab" data-bs-target="#details-tab-pane"
                    type="button" role="tab" aria-controls="details-tab-pane" aria-selected="true"><i
                        class="fa-solid fa-asterisk"></i> DETAILS</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="documents-tab" data-bs-toggle="tab" data-bs-target="#documents-tab-pane"
                    type="button" role="tab" aria-controls="documents-tab-pane" aria-selected="false"><i
                        class="fa-solid fa-folder-open"></i> DOCUMENTS</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                    type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false"><i
                        class="fa-solid fa-file-invoice-dollar"></i> INVOICES</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="certificate-tab" data-bs-toggle="tab" data-bs-target="#certificate-tab-pane"
                    type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false"><i
                        class="fa-solid fa-certificate"></i> CERTIFICATE</button>
            </li>
        </ul>
        <div class="tab-content p-1 pt-0" id="myTabContent">
            <div class="tab-pane fade show active" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab"
                tabindex="0">
                <div class="mx-0 w-100 bg-white border-bottom">
                    <h6 class="py-3 ps-1 fw-bold text-center fs-5 text-info-emphasis">Shipment Details <i
                            class="fa-solid fa-circle-info text-warning-emphasis"></i></h6>
                </div>
                <div class="row gap-3 mx-auto my-3 ship-info">
                    <div class="col-md-4 bg-white border p-4 pt-3 rounded-4 shadow">
                        <h6 class="p-2 fw-bold text-info-emphasis"><i
                                class="fa-solid fa-location-dot text-success"></i>&nbsp;
                            ship From
                        </h6>
                        <div>
                            <p class="px-2 fw-bold"><span style="border-bottom: 2px dotted darkred"
                                    title="Port of loading">POL</span>:
                                <?php echo $shipment->getPol() ?>
                            </p>
                            <p class="mb-0 px-2"><span class="fw-bold text-success">Shipper: </span>
                                <?php echo $shipper->getCompanyName() ?>
                            </p>
                            <p class="mb-0 px-2"><span class="fw-bold text-success">Address: </span>
                                <?php echo $shipper->getAddress() ?>
                            </p>
                            <p class="mb-0 px-2"><span class="fw-bold text-success">Tele/Fax: </span>
                                <?php echo $shipper->getTeleFax() ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 bg-white border p-4 pt-3 rounded-4 mx-auto shadow">
                        <h6 class="p-2 fw-bold text-info-emphasis"><i
                                class="fa-solid fa-location-dot text-primary"></i>&nbsp;
                            ship To
                        </h6>
                        <div>
                            <p class="px-2 fw-bold"><span style="border-bottom: 2px dotted darkred"
                                    title="Port of Delivery">POD</span>:
                                <?php echo $shipment->getPod() ?>
                            </p>
                            <p class="mb-0 px-2"><span class="fw-bold text-primary">Consignee: </span>
                                <?php echo $consignee->getCompanyName() ?>
                            </p>
                            <p class="mb-0 px-2"><span class="fw-bold text-primary">Address: </span>
                                <?php echo $consignee->getAddress() ?>
                            </p>
                            <p class="mb-0 px-2"><span class="fw-bold text-primary">Tele/Fax: </span>
                                <?php echo $consignee->getTeleFax() ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 bg-white border p-4 pt-3 rounded-4 shadow">
                        <h6 class="p-2 mb-3 fw-bold text-info-emphasis"><i class="fa-solid fa-calendar-days"></i>&nbsp;
                            Pickup and Delivery
                        </h6>
                        <div>
                            <p class="my-2 px-2"><span class="fw-bold"><i class="fa-solid fa-stopwatch text-success"></i>
                                </span>
                                <?php echo isset($loadedAt) ? $loadedAt->format('Y-m-d H:i:s') : "Not Loaded yet" ?>
                            </p>
                            <p class="my-2 px-2"><span class="fw-bold"><i class="fa-solid fa-stopwatch text-primary"></i>
                                </span>
                                <?php echo isset($deliveredAt) ? $deliveredAt->format('Y-m-d H:i:s') : "Not Delivered Yet" ?>
                            </p>
                            <p class="my-2s px-2"><span class="fw-bold" title="estimated time of arrival."
                                    style="border-bottom: 2px dotted darkred">ETA</span>
                                <?php echo isset($deliveredAt) ? ($deliveredAt->diff($loadedAt))->format('%a<span class="text-success me-1">D</span> %h<span class="text-success me-1">H</span> %i<span class="text-success me-1">M</span> %s<span class="text-success me-1">S</span>') : "Not Defined" ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row gap-3 mx-auto my-3 ship-info">
                    <div class="col-md-4 bg-white border me-3 p-4 pt-3 rounded-4 shadow">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h6 class="p-2 mb-2 fw-bold text-warning-emphasis">References <i
                                        class="fa-solid fa-pen"></i>
                                </h6>
                                <!-- Updating section -->
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#updatingReferences">
                                    <i class="fa-solid fa-wrench"></i>
                                </button>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="updatingReferences" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Updating DHL-B/L-DHL</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="/shipments/updateReferences">
                                                <div class="row">
                                                    <div class="col">
                                                        <select class="form-select" name="toUpdate"
                                                            aria-label="Default select example">
                                                            <option value="tracking">Tracking Num</option>
                                                            <option value="dhl">DHL Number</option>
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" class="form-control" name="value"
                                                            placeholder="Enter new value" aria-label="value">
                                                    </div>
                                                    <div class="col-auto">
                                                        <button type="submit" class="btn btn-success rounded-1 mb-3"><i
                                                                class="fa-solid fa-pen"></i> Update</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Updating section -->
                        </div>
                        <div>
                            <p class="my-4 px-2"><span class="fw-bold me-4">Tracking No.: </span>
                                <?php echo $shipment->getTrackingNumber() ?>
                            </p>
                            <p class="my-4 px-2"><span class="fw-bold me-4">Bill of lading: </span>
                                <?php echo $policyNum ?>
                            </p>
                            <p class="my-4 px-2"><span class="fw-bold me-4">DHL Number: </span>
                                <?php echo $shipment->getDhl() ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-7 bg-white border p-4 pt-3 rounded-4 shadow">
                        <div class="card-header d-flex justify-content-between">
                            <h6 class="p-2 mb-3 fw-bold text-primary-emphasis">Status <i class="fa-solid fa-clipboard"></i>
                            </h6>
                            <!-- Updating section -->
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-primary mb-3" data-bs-toggle="modal"
                                data-bs-target="#updateStatus">
                                <i class="fa-solid fa-wrench"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="updateStatus" data-bs-backdrop="static" data-bs-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Updating Status Date</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="/shipments/updateStatus">
                                                <div class="row">
                                                    <div class="col mb-5">
                                                        <select class="form-select" name="newStatus"
                                                            aria-label="Default select example">
                                                            <option value="1">Loaded At</option>
                                                            <option value="2">Arrived At</option>
                                                            <option value="3">Delivered At</option>
                                                        </select>
                                                    </div>
                                                    <div class="col mb-5">
                                                        <input type="datetime-local" class="form-control" name="date"
                                                            placeholder="Enter new value" aria-label="date">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-success rounded-1 mb-3"><i
                                                                class="fa-solid fa-pen"></i> Update</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Updating section -->
                        </div>
                        <div>
                            <div class="progress" role="progressbar" aria-label="Animated striped example"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar progress-bar progress-bar-animated <?php echo ($progress == 100) ? 'bg-success' : 'bg-info' ?>"
                                    style="width: <?php echo $progress ?>%"></div>
                            </div>
                            <div class="d-flex justify-content-between flex-md-row mt-5 position-relative">
                                <div>
                                    <p class="fw-bold text-primary">Created</p>
                                    <p class="fw-bold text-success">
                                        <?php echo isset($createdAt) ? $createdAt->format('Y-m-d') : "0000-00-00" ?>
                                    </p>
                                </div>
                                <div>
                                    <p class="fw-bold <?php echo isset($loadedAt) ? "text-primary" : "text-black-50" ?> ">
                                        Loaded
                                    </p>
                                    <p class="fw-bold <?php echo isset($loadedAt) ? "text-success" : "text-black-50" ?> ">
                                        <?php echo isset($loadedAt) ? $loadedAt->format('Y-m-d') : "0000-00-00" ?></p>
                                </div>
                                <div>
                                    <p class="fw-bold <?php echo isset($arrivedAt) ? "text-primary" : "text-black-50" ?> ">
                                        Arrived</p>
                                    <p class="fw-bold <?php echo isset($arrivedAt) ? "text-success" : "text-black-50" ?> ">
                                        <?php echo isset($arrivedAt) ? $arrivedAt->format('Y-m-d') : "0000-00-00" ?></p>
                                </div>
                                <div>
                                    <p
                                        class="fw-bold <?php echo isset($deliveredAt) ? "text-primary" : "text-black-50" ?> ">
                                        Delivered</p>
                                    <p
                                        class="fw-bold <?php echo isset($deliveredAt) ? "text-success" : "text-black-50" ?> ">
                                        <?php echo isset($deliveredAt) ? $deliveredAt->format('Y-m-d') : "0000-00-00" ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row gap-3 ms-auto justify-content-evenly my-3 ship-info">
                    <div class="col-md-3 bg-white border p-4 pt-3 rounded-4 shadow">
                        <div class="d-flex justify-content-between">
                            <h6 class="p-2 mb-3 fw-bold text-primary-emphasis">Shipping Info <i class="fa-solid fa-map"></i>
                            </h6>
                            <!-- Updating section -->
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-primary mb-3" data-bs-toggle="modal"
                                data-bs-target="#updateShippingInfo">
                                <i class="fa-solid fa-wrench"></i>
                            </button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="updateShippingInfo" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Updating Status Date</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="/shipments/updateShippingInfo">
                                            <div class="row">
                                                <div class="col-md-12 mb-2">
                                                    <input type="text" class="form-control border-primary-subtle"
                                                        name="office" placeholder="Enter Shipping Office"
                                                        aria-label="Enter Shipping Office" required>
                                                </div>
                                                <div class="col-md-12 mb-2">
                                                    <select class="form-select border-primary-subtle" name="shipBy"
                                                        aria-label="Default select example">
                                                        <option value="Sea" selected>Sea</option>
                                                        <option value="Air">Air</option>
                                                        <option value="Truck">Truck</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-12 mb-2">
                                                    <select class="form-select border-primary-subtle" name="mode"
                                                        aria-label="Default select example">
                                                        <option value="Export">Export</option>
                                                        <option value="Import">Import</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-12 mb-2">
                                                    <select class="form-select border-primary-subtle" name="line"
                                                        aria-label="Default select example">
                                                        <?php foreach ($shippingLines as $shippingLin): ?>
                                                            <option value="<?php echo $shippingLin->getId() ?>"><?php echo $shippingLin->getLineName() ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-12 mx-auto">
                                                    <button type="submit"
                                                        class="btn btn-success w-50 mx-auto rounded-1 mb-3"><i
                                                            class="fa-solid fa-pen"></i> Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Updating section -->
                        <div>
                            <p class="my-2 px-2"><span class="fw-bold me-2">Ship. Office: </span>
                                <?php echo $shipment->getShipmentOffice() ?>
                            </p>
                            <p class="my-2 px-2"><span class="fw-bold me-2">Shipped By: </span>
                                <?php echo $shipment->getShippedBy() ?>
                            </p>
                            <p class="my-2 px-2"><span class="fw-bold me-2">Ship. Mode: </span>
                                <?php echo $shipment->getShipmentMode()->value ?>
                            </p>
                            <p class="my-2 px-2"><span class="fw-bold me-3">Ship. Line: </span>
                                <?php echo $shippingLine->getLineName() ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 bg-white border p-4 pt-3 rounded-4 shadow">
                        <div class="d-flex justify-content-between">
                            <h6 class="p-2 mb-3 fw-bold text-primary-emphasis">Additional info <i
                                    class="fa-solid fa-puzzle-piece"></i></h6>

                            <!-- Updating section -->
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-primary mb-3" data-bs-toggle="modal"
                                data-bs-target="#updateAdditionalInfo">
                                <i class="fa-solid fa-wrench"></i>
                            </button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="updateAdditionalInfo" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Updating Additional Info</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="/shipments/updateAdditionalInfo">
                                            <div class="row">
                                                <div class="col-md-12 mb-2">
                                                    <label for="reliesDate">Relies Date:</label>
                                                    <input type="datetime-local" class="form-control border-primary-subtle"
                                                        name="reliesDate" id="reliesDate"
                                                        aria-label="Enter Shipping Office">
                                                </div>

                                                <div class="col-md-12 mb-2">
                                                    <input type="text" class="form-control border-primary-subtle"
                                                        name="income" placeholder="Enter Incoming Number"
                                                        aria-label="Enter Incoming Number">
                                                </div>

                                                <div class="col-md-12 mb-2">
                                                    <input type="text" class="form-control border-primary-subtle"
                                                        name="exchange" placeholder="Enter Exchange Data"
                                                        aria-label="Enter Exchange Data">
                                                </div>

                                                <div class="col-md-12 mx-auto">
                                                    <button type="submit"
                                                        class="btn btn-success w-50 mx-auto rounded-1 mb-3"><i
                                                            class="fa-solid fa-pen"></i> Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Updating section -->

                        <div>
                            <p class="my-4 px-2"><span class="fw-bold me-2">Relies Date: </span>
                                <?php
                                if ($shipment->getReliesDate()) {
                                    echo $shipment->getReliesDate()->format('Y-m-d H:i:s');
                                } else {
                                    echo "";
                                }
                                ?>
                            </p>
                            <p class="my-4 px-2"><span class="fw-bold me-2">Income Num: </span>
                                <?php echo $shipment->getIncomingNumber() ?>
                            </p>
                            <p class="my-0 px-2"><span class="fw-bold me-2">Exchange Data: </span>
                                <?php echo $shipment->getExchangeData() ?>
                            </p>
                        </div>
                    </div>
                    <div
                        class="col-md-5 border p-4 pt-3 rounded-4 shadow <?php echo $shipment->getPostponements()->count() == 0 ? 'bg-white' : 'bg-warning' ?>">
                        <div class="d-flex justify-content-between">
                            <h6 class="p-2 mb-3 fw-bold text-primary-emphasis">Postponements <i
                                    class="fa-solid fa-person-running"></i></h6>

                            <!-- Updating section -->
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-primary mb-3" data-bs-toggle="modal"
                                data-bs-target="#updatePostponements">
                                <i class="fa-solid fa-wrench"></i>
                            </button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="updatePostponements" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Updating Postponements</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="/shipments/updatePostponements">
                                            <div class="row">
                                                <div class="col-md-12 mb-2">
                                                    <label for="delayDate">Delay Date:</label>
                                                    <input type="datetime-local" class="form-control border-primary-subtle"
                                                        name="delayDate" id="delayDate">
                                                </div>

                                                <div class="col-md-12 mb-2">
                                                    <input type="text" class="form-control border-primary-subtle"
                                                        name="reason" placeholder="Enter Delay Reason"
                                                        aria-label="Enter Delay Reason">
                                                </div>

                                                <div class="col-md-12 mx-auto">
                                                    <button type="submit"
                                                        class="btn btn-success w-50 mx-auto rounded-1 mb-3"><i
                                                            class="fa-solid fa-pen"></i> Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Updating section -->
                        <div>
                            <?php

                            if ($shipment->getPostponements()->count() != 0) {
                                $postponements = $shipment->getPostponements();
                                foreach ($postponements as $postponement) {
                                    echo "<p class='text-white d-flex justify-content-between fw-bold fs-6 mb-0'><span class='me-2'>{$postponement->getDelayDate()->format('Y-m-d')}</span> {$postponement->getReason()}<span><a href='/shipments/deletePostponement?postponement={$postponement->getId()}'><i class='fa-solid text-danger fa-circle-xmark'></i></a></span></p>";
                                }
                            } else {
                                echo "<p class='text-success lead'>There are no postponements !!!</p>";
                            }

                            ?>
                        </div>
                    </div>
                </div>
                <div class="row mx-auto my-5 ship-info notes">
                    <div class="col-md-8 mx-auto h-25 row" id="notes">
                        <?php
                        $noteNum = 1;
                        if ($notes->count() != 0): ?>
                            <?php foreach ($notes as $note): ?>
                                <div class=" col-md-2 bg-white rounded-circle fs-4 me-2 shadow"
                                    style="width: 3.3rem; height: 3.3rem; border-radius: 50%; padding: .5rem .2rem .5rem 1.1rem; border:1px dashed blue">
                                    <?php echo $noteNum++ ?>
                                </div>
                                <p class="col-md-11 bg-white py-3 px-1 rounded-3 shadow overflow-x-hidden text-nowrap"
                                    style="font-size: larger">
                                    <i class="fa-regular fa-circle-check text-success fa-lg"></i>&nbsp;
                                    <?php echo $note->getNote() ?> <span class="float-end me-3 d-inline-block">
                                        <?php echo ($note->getCreatedAt())->format('Y-m-d H:i:s') ?>
                                    </span>
                                    <a href="/shipments/deleteNote?note=<?php echo $note->getId() ?>"
                                        class="float-end me-3 d-inline-block text-danger"><i
                                            class="fa-solid fa-circle-xmark"></i></a>
                                </p>
                            <?php endforeach; ?>
                            <span class="p-0 mt-3" id="addNoteButton"><i
                                    class="fa-solid fa-circle-plus fa-bounce text-success fs-1"></i></span>
                        <?php else: ?>
                            <span class="col-md-1 mt-3" id="addNoteButton"><i
                                    class="fa-solid fa-circle-plus fa-bounce text-success fs-1"></i></span>
                            <p class="bg-white col-md-8 p-3 bg-danger-subtle rounded-3 shadow lead">
                                There is No notes for this Shipment
                            </p>
                        <?php endif; ?>

                    </div>
                    <div class="col-md-4 bg-white shadow rounded-4 mx-auto d-flex">
                        <div class="align-self-center text-center w-25">
                            <i class="fa-solid fa-angles-left fa-beat text-danger fs-2 "></i>
                        </div>
                        <div>
                            <h4 class="text-danger py-3 fw-bold">Notes </h4>
                            <p class="lead">Those notes are created by the consignee about the shipment</p>
                        </div>
                    </div>
                </div>
                <div class="row mx-auto ship-info items">
                    <h5 class="p-3 fw-bold bg-white border-top text-center mx-auto text-info-emphasis w-100">Items <i
                            class="fa-solid fa-box-open"></i></h5>
                    <?php
                    $itemsNum = 1;
                    $items = $shipment->getItems();
                    $packagesNum = 1;
                    foreach ($items as $item):
                        $packages = $item->getPackages();
                        ?>
                        <div
                            class="col-md-4 bg-white border shadow rounded-start-4 rounded-end-pill mx-auto p-4 pt-3 align-self-center">
                            <h6 class="fw-bold text-primary">
                                <?php echo "Item " . $itemsNum++ ?>
                            </h6>
                            <div>
                                <p class="my-2 px-2"><span class="fw-bold text-warning-emphasis">Description :&nbsp;&nbsp;
                                    </span>
                                    <?php echo $item->getItemDescription() ?>
                                </p>
                                <p class="my-2 px-2"><span class="fw-bold me-4 text-warning-emphasis">Quantity : </span>
                                    <?php echo $item->getQuantity() . " kg" ?>
                                </p>
                                <p class="my-2 px-2"><span class="fw-bold text-warning-emphasis me-3">Prod Date:&nbsp;&nbsp;
                                    </span>
                                    <?php echo $item->getProductionDate()->format('m-Y') ?>
                                </p>
                                <p class="my-2 px-2"><span class="fw-bold text-warning-emphasis me-3">Price/Ton:&nbsp;&nbsp;
                                    </span>
                                    <?php echo "$" . $item->getPricePerTon() ?>
                                </p>
                                <p class="my-2 px-2"><span class="fw-bold text-warning-emphasis me-3">On Pallets:&nbsp;&nbsp;
                                    </span>
                                    <?php echo $item->getPalletsNumber() ?>
                                </p>
                                <p class="my-2 px-2"><span class="fw-bold text-warning-emphasis me-3">Total price:&nbsp;&nbsp;
                                    </span>
                                    <?php echo "$" . $item->getPricePerTon() * ($item->getQuantity() / 1000) ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-8 bg-white mx-auto row shadow rounded-start-5 border py-4">
                            <?php foreach ($packages as $package): ?>
                                <div class="col-md-5 mx-auto ms-5 mt-3">
                                    <h6 class="fw-bold text-success">
                                        <?php echo "Package " . $packagesNum++; ?>
                                    </h6>
                                    <p class="my-2 px-2"><span class="fw-bold text-warning-emphasis">Packages No. :&nbsp;&nbsp;
                                        </span>
                                        <?php echo $package->getNumberOfPackages() . " " . $package->getPackageType() ?>
                                    </p>
                                    <p class="my-2 px-2"><span class="fw-bold me-4 text-primary-emphasis">Net Weight: </span>
                                        <?php echo $package->getNetWeight() . " " . $package->getWeightType()->value ?>
                                    </p>
                                    <p class="my-2 px-2"><span class="fw-bold me-4 text-primary-emphasis">Total
                                            NW:&nbsp;&nbsp;&nbsp;&nbsp; </span>
                                        <?php echo $package->getNetWeight() * $package->getNumberOfPackages() . " " . $package->getWeightType()->value ?>
                                    </p>
                                    <p class="my-2 px-2"><span class="fw-bold text-success-emphasis">Gross Weight:&nbsp;&nbsp;
                                        </span>
                                        <?php echo $package->getGrossWeight() . " " . $package->getWeightType()->value ?>
                                    </p>
                                    <p class="my-2 px-2"><span class="fw-bold text-success-emphasis me-4">Total
                                            GW:&nbsp;&nbsp;&nbsp;
                                        </span>
                                        <?php echo $package->getGrossWeight() * $package->getNumberOfPackages() . " " . $package->getWeightType()->value ?>
                                    </p>
                                </div>
                            <?php endforeach; ?>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>
            <div class="tab-pane fade" id="documents-tab-pane" role="tabpanel" aria-labelledby="documents-tab" tabindex="0">
                <div class="mx-0 w-100 bg-white border-bottom">
                    <h6 class="py-3 ps-1 fw-bold text-primary-emphasis fs-5">Shipment Documents</h6>
                    <div class="row my-2 mx-auto">
                        <div class="col-md-4 mx-auto h-100 bof">
                            <?php if ($policy): ?>
                                <div class="card bg-white shadow" style="width: 18rem; height: 18rem">
                                    <div class="card-header text-center text-primary-emphasis">
                                        <div class="col-md-12">B/L:
                                            <?php echo $policy->getPolicyNumber() ?>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-outline-primary w-100 h-100" data-bs-toggle="modal"
                                            data-bs-target="#blmodal">
                                            <i class="fa-solid fa-file fa-2xl"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="showBL">
                                    <!-- Modal -->
                                    <div class="modal fade" id="blmodal" data-bs-backdrop="static" data-bs-keyboard="false"
                                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-fullscreen-xxl-down">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Bill Of Lading</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <?php $filePath = "/documents/shipment_" . $shipment->getId() . '_' . $shipment->getCreatedAt()->getTimestamp() . '/policy/' . $policy->getPolicy() ?>
                                                <div class="modal-body" id="#bill">
                                                    <embed src="<?php echo $filePath ?>" style="height: 100vh; width: 100%">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger rounded-0"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="card bg-white shadow" style="width: 18rem; height: 18rem">
                                    <div class="card-header text-center text-success fw-bold">
                                        Add Bill of Lading
                                    </div>
                                    <div class="card-body">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-outline-success w-100 h-100" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop">
                                            <i class="fa-solid fa-plus fa-beat fa-2xl"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Bill of Lading</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="/shipments/upload_BOF"
                                                    enctype="multipart/form-data">
                                                    <div class="mb-3">
                                                        <label for="policyNum" class="form-label">B/L Number</label>
                                                        <input type="text" class="form-control  border-primary-subtle"
                                                            id="policyNum" name="policyNum" autofocus required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="loadingDate" class="form-label">Loading Date</label>
                                                        <input type="date" class="form-control border-primary-subtle"
                                                            id="loadingDate" name="loadingDate" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="policy" class="form-label">Bill Of Lading</label>
                                                        <input type="file" class="form-control  border-primary-subtle"
                                                            id="policy" name="policy">
                                                    </div>
                                                    <div class="mx-auto w-50">
                                                        <button type="submit"
                                                            class="btn btn-success rounded-1 fw-bold w-100">Upload
                                                            B/L <i class="fa-solid fa-upload fa-bounce"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row my-2 mx-auto h-100">
                        <div class="card col-md-3 bg-white shadow" style="height: 18rem">
                            <div class="card-header text-center text-success fw-bold">
                                Add Shipment Files
                            </div>
                            <div class="card-body">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-success w-100 h-100" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    <i class="fa-solid fa-plus fa-beat fa-2xl"></i>
                                </button>
                                <div class="filesModal">
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Shipment Files
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="/shipments/upload_files"
                                                        enctype="multipart/form-data">
                                                        <div class="mb-3">
                                                            <label for="shipFiles" class="form-label">Add Shipment
                                                                Files</label>
                                                            <input type="file" class="form-control  border-primary-subtle"
                                                                id="shipFiles" name="shipFiles[]" multiple>
                                                        </div>
                                                        <div class="mx-auto w-50">
                                                            <button type="submit"
                                                                class="btn btn-success rounded-1 fw-bold w-100">Upload
                                                                <i
                                                                    class="fa-solid fa-arrow-up-from-bracket"></i></i></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $documents = $shipment->getDocuments() ?>
                        <?php foreach ($documents as $document): ?>
                            <div class="col-md-3 mx-auto my-2" style="height: 18rem">
                                <div class="card bg-white shadow h-100">
                                    <div class="card-header text-center text-primary-emphasis fw-bold">
                                        <?php echo $document->getDocumentName() ?>
                                    </div>
                                    <div class="card-body">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-outline-primary w-100 h-100" data-bs-toggle="modal"
                                            data-bs-target="#filesModel<?php echo $document->getId() ?>">
                                            <i class="fa-solid fa-file fa-2xl"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="filesModel<?php echo $document->getId() ?>"
                                    data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen-xxl-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                                    <?php echo $document->getDocumentName() ?>
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <?php $filePath = "/documents/shipment_" . $shipment->getId() . '_' . $shipment->getCreatedAt()->getTimestamp() . '/' . $document->getDocumentName() ?>
                                            <div class="modal-body" id="#bill">
                                                <embed src="<?php echo $filePath ?>" style="height: 100vh; width: 100%">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger rounded-0"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                <h5 class="bg-white text-bold fw-bold text-primary-emphasis ps-4 py-3">Invoices</h5>
                <div class="border shadow bg-white p-3 pb-0" style="width: fit-content">
                    <p class="text-primary-emphasis lead">This shipments has <span class="text-danger">
                            <?php echo $shipment->getItems()->count() ?>
                        </span> Invoice(s)</p>
                </div>

                <div class="invoice row mx-auto" id="invoice">
                    <?php
                    $counter = 1;
                    foreach ($items as $item):
                        ?>
                        <?php
                        $invoice = $item->getInvoices();
                        $packages = $item->getPackages();
                        ?>
                        <div class="card col-md-5 mx-auto my-3 shadow">
                            <div class="card-header">
                                <p class="my-auto">Invoice No.
                                    <?php echo $invoice->getInvoiceNumber() . " / " . $invoice->getInvoiceDate()->format("Y") ?>
                                </p>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php echo $item->getItemDescription() ?>
                                </h5>
                                <p class="card-text"><span class="text-primary me-3">Shipper: </span>
                                    <?php echo $shipper->getCompanyName() ?>
                                </p>
                                <p class="card-text"><span class="text-primary">Consignee: </span>
                                    <?php echo $consignee->getCompanyName() ?>
                                </p>
                                <p class="card-text"><span class="text-primary">Quantity: </span>
                                    <?php echo $item->getQuantity() . ' ' . $package->getWeightType()->value ?>
                                </p>
                                <button type="button" class="btn btn-outline-primary rounded-1" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal<?php echo $counter ?>">
                                    Invoice Details
                                </button>
                            </div>
                            <div class="card-footer text-muted">
                                <?php

                                $invoiceDate = $invoice->getInvoiceDate();
                                $currentDate = date_create();
                                $duration = $currentDate->diff($invoiceDate);

                                $numOfMonths = $duration->m;
                                $numOfDays = $duration->d;
                                $numOfHours = $duration->h;
                                $numOfMinutes = $duration->i;
                                $numOfSeconds = $duration->s;

                                if ($numOfMonths < 1) {
                                    if ($numOfDays < 1) {
                                        if ($numOfHours < 1) {
                                            if ($numOfMinutes < 1) {
                                                echo $numOfSeconds . (($numOfSeconds > 1) ? " seconds " : " second ") . " ago";
                                            } else {
                                                echo $numOfMinutes . (($numOfMinutes > 1) ? " minutes " : " minute ") . " ago";
                                            }
                                        } else {
                                            echo $numOfHours . (($numOfHours > 1) ? " hours " : " hour ") . " ago";
                                        }
                                    } else {
                                        echo $numOfDays . (($numOfDays > 1) ? " days " : " day ") . " ago";
                                    }
                                } else {
                                    echo $invoiceDate->format('Y-m-d');
                                }

                                ?>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal<?php echo $counter ?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5 text-primary-emphasis" id="exampleModalLabel">
                                                <?php echo $item->getItemDescription() ?>
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body border" id="printable<?php echo $counter ?>">
                                            <div class="d-flex justify-content-between" id="invoice-print">
                                                <div class="fw-bold p-3 ms-2">
                                                    <p class="fw-bold mb-0">Elfath for Import and Export</p>
                                                    <p class="fw-bold mb-0">Registeration no. 7712</p>
                                                    <p class="fw-bold mb-0">Vat no. 393-2111-282</p>
                                                </div>
                                                <div class="ps-5">
                                                    <img src="../resources/images/img.png" class="p-3" loading="lazy" alt="Logo"
                                                        style="width: 100px; height: 90px">
                                                </div>
                                            </div>
                                            <h5 class="text-center fw-bold text-decoration-underline">
                                                Invoice No. <span class="fw-lighter">
                                                    <?php echo $invoice->getInvoiceNumber() . "/" . $invoice->getInvoiceDate()->format("Y") ?>
                                                </span>
                                            </h5>
                                            <div class="row ms-5 mt-4">
                                                <h6><span class="fw-bold lead mb-3">Date: </span>
                                                    <?php echo $invoice->getInvoiceDate()->format('d-m-Y') ?>
                                                </h6>
                                                <h6 class="mb-0"><span class="fw-bold lead">Shipper: </span>
                                                    <?php echo $shipper->getCompanyName() ?>
                                                </h6>
                                                <p class="mb-0"><span class="lead">Address: </span>
                                                    <?php echo $shipper->getAddress() ?>
                                                </p>
                                                <p class="mb-0"><span class="lead">Tele/Fax: </span>
                                                    <?php echo $shipper->getTeleFax() ?>
                                                </p>
                                                <p class="mb-2"><span class="lead">Registration Number: </span>
                                                    <?php echo $shipper->getRegistrationNumber() ?>
                                                </p>
                                            </div>
                                            <div class="row ms-5 mt-1">
                                                <h6 class="mb-0"><span class="fw-bold lead">Consignee: </span>
                                                    <?php echo $consignee->getCompanyName() ?>
                                                </h6>
                                                <p class="mb-2"><span class="lead">Address: </span>
                                                    <?php echo $consignee->getAddress() ?>
                                                </p>
                                            </div>
                                            <div class="row mx-3">
                                                <table class="table table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Quantity</th>
                                                            <th scope="col">Price/Ton</th>
                                                            <th scope="col">Prod. Date</th>
                                                            <th scope="col">No. Of Packages</th>
                                                            <th scope="col">N.W
                                                                <?php echo $package->getPackageType() ?>
                                                            </th>
                                                            <th scope="col">G.W
                                                                <?php echo $package->getPackageType() ?>
                                                            </th>
                                                            <th scope="col">Lot Num</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-wrap"
                                                                rowspan="<?php echo $packages->count() + 1 ?>">
                                                                <?php echo $item->getQuantity() . " " . $package->getWeightType()->value . " of " . $item->getItemDescription() ?>
                                                            </td>
                                                            <td rowspan="<?php echo $packages->count() + 1 ?>;">
                                                                <?php echo "$" . $item->getPricePerTon(); ?>
                                                            </td>
                                                            <td rowspan="<?php echo $packages->count() + 1 ?>">
                                                                <?php echo $item->getProductionDate()->format('m/Y'); ?>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        $totalPrice = 0.0;
                                                        $totalNetWeight = 0.0;
                                                        $totalGrossWeight = 0.0;
                                                        ?>
                                                        <?php foreach ($packages as $package): ?>
                                                            <?php
                                                            $packageArr[] = $package->getNumberOfPackages();
                                                            $totalNetWeight += ($package->getNetWeight() * $package->getNumberOfPackages());
                                                            $totalGrossWeight += ($package->getGrossWeight() * $package->getNumberOfPackages());
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <?php echo $package->getNumberOfPackages() . " " . $package->getPackageType() ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $package->getNetWeight() . ' ' . $package->getWeightType()->value ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $package->getGrossWeight() . ' ' . $package->getWeightType()->value ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $package->getLotNumber() ?>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>

                                                        <tr>
                                                            <th scope="col">Total</th>
                                                            <td>
                                                                <?php
                                                                $totalPrice = $item->getPricePerTon() * ($item->getQuantity() / 1000);
                                                                echo "$" . $totalPrice
                                                                    ?>
                                                            </td>
                                                            <td></td>
                                                            <td>
                                                                <?php
                                                                echo array_sum($packageArr) . " " . $package->getPackageType();
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                echo $totalNetWeight;
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                echo $totalGrossWeight;
                                                                ?>
                                                            </td>
                                                            <td></td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="row">
                                                <p class="text-center">
                                                    <?php echo Utilities::convertNumber($totalPrice) . " dollars" ?>
                                                </p>
                                            </div>
                                            <div class="ms-5 mb-5">
                                                <p class="mb-0"><span class="fw-bold">Shipment By: </span>
                                                    <?php echo $shipment->getShippedBy() ?>
                                                </p>
                                                <p class="mb-0"><span class="fw-bold">POL: </span>
                                                    <?php echo $shipment->getPol() ?>
                                                </p>
                                                <p><span class="fw-bold">POD: </span>
                                                    <?php echo $shipment->getPod() ?>
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <div class="ps-4">
                                                    <img class="ms-5 me-3" src="/resources/images/img_1.png" alt="Sign"
                                                        width="210">
                                                </div>
                                                <div class="mt-5 text-nowrap">
                                                    <p class="mb-0 w-25">ElFath for Import and Export</p>
                                                    <p class="mb-0 w-25"><span class="fw-bold">Address: </span>Netma – Kom
                                                        Hamada –
                                                        Elbhera –
                                                        EGYPT</p>
                                                    <p class="mb-0 w-25"><span class="fw-bold">Website: </span><a
                                                            href="https://elfath-import-export.com/"
                                                            target="_blank">elfath-import-export.com</a></p>
                                                    <p class="mb-0 w-25"><span class="fw-bold">Mail: </span><a
                                                            href="mailto:Elfathimportexport@yahoo.com">Elfathimportexport@yahoo.com</a>
                                                    </p>
                                                    <p class="mb-0 w-25"><span class="fw-bold">Mail: </span><a
                                                            href="mailto:info@elfath-import-export.com">info@elfath-import-export.com</a>
                                                    </p>
                                                    <p class="mb-0 w-25"><span class="fw-bold">Facebook: </span><a
                                                            href="https://www.facebook.com/Elfathimportexport"
                                                            target="_blank">Elfath
                                                            import
                                                            & export</a></p>
                                                    <p class="mb-0 w-25"><span class="fw-bold">WhatsApp:
                                                        </span>+201145288886 -
                                                        +201142588880
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-primary rounded-1" onclick="$('#printable<?php echo $counter ?>').printThis({
                                        printContainer: true,
                                        });">
                                                <i class="fa-solid fa-print fa-bounce"></i> Print Form
                                            </button>
                                        </div>
                                        <div id="hidden-print-div"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $counter++;
                    endforeach; ?>
                </div>
            </div>
            <div class="tab-pane fade" id="certificate-tab-pane" role="tabpanel" aria-labelledby="certificate-tab"
                tabindex="0">
                <h5 class="bg-white text-bold fw-bold text-primary-emphasis ps-4 py-3">Certificates</h5>
                <div class="row my-2 mx-auto">
                    <div class="col-md-4 mx-auto h-100 bof">
                        <!--                        Getting the certificates from the certificate table in the DB-->
                        <?php
                        $certificate = $shipment->getCertificate();
                        ?>
                        <?php if ($certificate): ?>
                            <div class="card bg-white shadow" style="width: 18rem; height: 18rem">
                                <div class="card-header text-center text-primary-emphasis">
                                    <div class="col-md-12">Cert:
                                        <?php echo $certificate->getCertificateNumber() ?>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <!-- Button trigger modal -->
                                    <p><span class="text-primary-emphasis">Delivery Date: </span>
                                        <?php echo $certificate->getCertificateDelivery()->format('Y-m-d') ?>
                                    </p>
                                    <button type="button" class="btn btn-outline-primary w-100 h-75" data-bs-toggle="modal"
                                        data-bs-target="#certificateModal">
                                        <i class="fa-solid fa-file fa-2xl"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="showCertificate">
                                <!-- Modal -->
                                <div class="modal fade" id="certificateModal" data-bs-backdrop="static" data-bs-keyboard="false"
                                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen-xxl-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Certificate</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <?php $filePath = "/documents/shipment_" . $shipment->getId() . '_' . $shipment->getCreatedAt()->getTimestamp() . '/certificate/' . $certificate->getCertificate(); ?>
                                            <div class="modal-body" id="#bill">
                                                <embed src="<?php echo $filePath ?>" style="height: 100vh; width: 100%">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger rounded-0"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="card bg-white shadow" style="width: 18rem; height: 18rem">
                                <div class="card-header text-center text-success fw-bold">
                                    Add Certificate
                                </div>
                                <div class="card-body">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline-success w-100 h-100" data-bs-toggle="modal"
                                        data-bs-target="#insertModal">
                                        <i class="fa-solid fa-plus fa-beat fa-2xl"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="insertModal" data-bs-backdrop="static" data-bs-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Certificate</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="/shipments/addCertificate"
                                                enctype="multipart/form-data">
                                                <div class="mb-3">
                                                    <label for="cerNum" class="form-label">Certificate Number</label>
                                                    <input type="text" class="form-control  border-primary-subtle" id="cerNum"
                                                        name="cerNum" autofocus required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="cerDate" class="form-label">Certificate Date</label>
                                                    <input type="date" class="form-control border-primary-subtle" id="cerDate"
                                                        name="cerDate" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="certificate" class="form-label">Certificate File</label>
                                                    <input type="file" class="form-control  border-primary-subtle"
                                                        id="certificate" name="certificate">
                                                </div>
                                                <div class="mx-auto w-50">
                                                    <button type="submit" class="btn btn-success rounded-1 fw-bold w-100">Add
                                                        Certificate <i class="fa-solid fa-certificate"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <h2 class="text-danger">No shipment of that name is found</h2>
    <?php endif; ?>
</div>