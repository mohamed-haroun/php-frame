<?php
use bootstrap\Application;
use models\Company;
use models\Contacts;
use models\ShippingLine;

/**
 * @var Contacts $contact
 */


$entityManager = Application::getDB()->entityManager();
$companyRepository = $entityManager->getRepository(Company::class);
$companies = $companyRepository->findAll();

$shippingLineRepository = $entityManager->getRepository(ShippingLine::class);
$shippingLines = $shippingLineRepository->findAll();

?>

<div class="d-flex align-items-start px-3 w-100" style="height: 100vh">
    <div class="nav flex-column nav-underline bg-secondary-subtle w-25 h-100 me-3" id="v-pills-tab" role="tablist"
        aria-orientation="vertical">
        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home"
            type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa-solid fa-building"></i> Companies</button>
        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile"
            type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fa-solid fa-route"></i> Shipping Lines</button>
    </div>
    <div class="tab-content w-100 h-100" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"
            tabindex="0">
            <div class="d-flex justify-content-between p-3">
                <h5 class="py-3 text-decoration-underline text-primary-emphasis">Shipping Companies</h5>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success rounded-1" data-bs-toggle="modal" data-bs-target="#officesModal">
                    <i class="fa-solid fa-plus fa-beat-fade"></i> Create New Company
                </button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="officesModal" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="/companies/create_company">
                                <div class="mb-3">
                                    <label for="companyName" class="form-label">Company Name</label>
                                    <input type="text" name="companyName" class="form-control border-primary-subtle"
                                        id="companyName">
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" name="address" class="form-control  border-primary-subtle"
                                        id="registerNum">
                                </div>
                                <div class="mb-3">
                                    <label for="registerNum" class="form-label">Registration</label>
                                    <input type="text" name="registerNum" class="form-control  border-primary-subtle"
                                        id="registerNum">
                                </div>
                                <div class="mb-3">
                                    <label for="vatNum" class="form-label">VAT Number</label>
                                    <input type="text" name="vatNum" class="form-control border-primary-subtle"
                                        id="vatNum">
                                </div>
                                <div class="mb-3">
                                    <label for="tele" class="form-label">Tele/Fax</label>
                                    <input type="text" name="tele" class="form-control border-primary-subtle" id="tele">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-success rounded-1">Add Company</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger rounded-1"
                                data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-gap-2">
                <?php foreach ($companies as $company): ?>
                    <div class="col-md-10 bg-white mx-auto shadow p-5 rounded position-relative">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-primary position-absolute end-0 top-0 mt-2 me-2" data-bs-toggle="modal"
                                data-bs-target="#updateCompany<?php echo $company->getId()?>">
                            <i class="fa-solid fa-wrench"></i>
                        </button>
                        <h3 class="text-primary-emphasis mb-3 text-center border-bottom border-dark">
                            <?php
                            echo $company->getCompanyName();
                            ?>
                        </h3>
                        <!-- Updating section -->
                <!-- Modal -->
                <div class="modal fade" id="updateCompany<?php echo $company->getId()?>" data-bs-backdrop="static"
                     data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Company</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="/companies/updateCompany?company=<?php echo $company->getId()?>">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label" for="companyName">Company Name</label>
                                            <input type="text" class="form-control" name="comName" id="companyName"
                                                   placeholder="Company Name" aria-label="comName" value="<?php echo $company->getCompanyName()?>">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label" for="address">Company Address</label>
                                            <input type="text" class="form-control" name="address" id="address"
                                                   placeholder="Company address" aria-label="address" value="<?php echo $company->getAddress()?>">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label" for="registration">Registration</label>
                                            <input type="text" class="form-control" name="registration" id="registration"
                                                   placeholder="Company Registration" aria-label="registration" value="<?php echo $company->getRegistrationNumber()?>">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label" for="vat">VAT Number</label>
                                            <input type="text" class="form-control" name="vat" id="vat"
                                                   placeholder="Company Vat" aria-label="vat" value="<?php echo $company->getVatNumber()?>">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label" for="tele">Tele/Fax</label>
                                            <input type="text" class="form-control" name="tele" id="tele"
                                                   placeholder="Fax / Tele" aria-label="tele" value="<?php echo $company->getTeleFax()?>">
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
                        <div class="row">
                            <div class="main-data col-md-6">
                                <h5>Main Data</h5>
                                <p class="mb-0"><span class="text-primary-emphasis">Address:</span>
                                    <?php echo $company->getAddress() ?>
                                </p>
                                <p class="mb-0"><span class="text-primary-emphasis">Registration:</span>
                                    <?php echo $company->getRegistrationNumber() ?>
                                </p>
                                <p class="mb-0"><span class="text-primary-emphasis">VAT Number:</span>
                                    <?php echo $company->getVatNumber() ?>
                                </p>
                                <p class="mb-0"><span class="text-primary-emphasis">Tele/Fax:</span>
                                    <?php echo $company->getTeleFax() ?>
                                </p>
                            </div>
                            <div class="contacts-data col-md-6">
                                <h5>Contacts Data</h5>
                                <?php
                                $contacts = $company->getContacts();
                                ?>
                                <?php foreach ($contacts as $contact): ?>
                                    <p class="mb-0"><span class="text-primary-emphasis">
                                            <?php echo $contact->getContactType() ?>:
                                        </span>
                                        <?php echo $contact->getContact() ?>
                                        <a href="/companies/deleteContact?company=<?php echo $company->getId() . '&contactId=' . $contacts->current()->getId()?>"><i class="fa-regular text-danger fa-circle-xmark"></i></a>
                                    </p>
                                <?php endforeach; ?>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#contactInsertion<?php echo $company->getId()?>">
                                    <i class="fa-solid fa-address-card"></i> Add Contact
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="contactInsertion<?php echo $company->getId()?>" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Contact Creation</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="/companies/add_contact?company=<?php echo $company->getId()?>">
                                                    <div class="row">
                                                        <input type="hidden" >
                                                        <div class="col-md-3 m-0 p-0">
                                                            <label for="contactType"></label>
                                                                <select class="form-select w-100" name="contactType" id="contactType">
                                                                    <option value="Mail" selected>Mail</option>
                                                                    <option value="Phone">Phone</option>
                                                                    <option value="Tele/Fax">Tele/Fax</option>
                                                                    <option value="Whatsapp">Whatsapp</option>
                                                                </select>
                                                        </div>
                                                        <div class="col-md-9 mb-3">
                                                            <label for="contact"></label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Enter a contact" name="contact" id="contact">
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary rounded-1 mx-auto w-50">Add
                                                        Contact</button>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"
            tabindex="0">
            <div class="d-flex justify-content-between p-3">
                <h5 class="py-3 text-decoration-underline text-primary-emphasis">Shipping Lines</h5>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success rounded-1" data-bs-toggle="modal" data-bs-target="#companyInsertion">
                    <i class="fa-solid fa-plus fa-beat-fade"></i> Create New Shipping Line
                </button>
            </div>
            <div class="row">
                <?php foreach ($shippingLines as $shippingLine):?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <div><?php echo $shippingLine->getLineName()?></div>
                                <!-- Updating section -->
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#updateShippingLine<?php echo $shippingLine->getId()?>">
                                    <i class="fa-solid fa-wrench"></i>
                                </button>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="updateShippingLine<?php echo $shippingLine->getId()?>" data-bs-backdrop="static"
                                 data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Updating Shipping Line</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="/companies/updateShippingLine?shippingLine=<?php echo $shippingLine->getId()?>">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label class="form-label" for="lineName">Line Name</label>
                                                        <input type="text" class="form-control border-primary-subtle mb-3" name="lineName" id="lineName"
                                                               placeholder="Enter new name" aria-label="lineName" value="<?php echo $shippingLine->getLineName()?>">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label class="form-label" for="linePath">Line Path</label>
                                                        <input type="text" class="form-control border-primary-subtle mb-3" name="linePath" id="linePath"
                                                               placeholder="Enter new path" aria-label="linePath" value="<?php echo $shippingLine->getTrackingPath()?>">
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
                            <div class="card-body">
                                <a href="<?php echo $shippingLine->getTrackingPath()?>" class="btn btn-outline-primary rounded-0" target="_blank">
                                    Go Tracking Path <i class="fa-solid fa-chevron-right text-danger fa-beat"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="companyInsertion" data-bs-backdrop="static" data-bs-keyboard="false"
                 tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="/companies/new_shipping_line">
                                <div class="mb-3">
                                    <label for="shippingLine" class="form-label">Shipping Line</label>
                                    <input type="text" name="shippingLine" class="form-control border-primary-subtle"
                                           id="shippingLine" placeholder="e.g. CMA, DHL, Maersk ...">
                                </div>
                                <div class="mb-3">
                                    <label for="trackingPath" class="form-label">Tracking Path</label>
                                    <input type="text" name="trackingPath" class="form-control  border-primary-subtle"
                                           id="trackingPath" placeholder="https://shippingline/tracking">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-success rounded-1">Add Shipping Line</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger rounded-1"
                                    data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>