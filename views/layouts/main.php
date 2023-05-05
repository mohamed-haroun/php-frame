<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Elfath - {{page_title}}</title>
    <link rel="icon" href="../../resources/images/logo.png">
    <link href="../../resources/css/all.min.css" rel="stylesheet">
    <link href="../../resources/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="../../resources/css/style.css" rel="stylesheet">
</head>

<body>
    <?php
    /**
     * @var UserModel $user
     */

    use dispatcher\Request;
    use models\UserModel;

    $request = new Request();
    $request = new Request();
    $path = $request->getPath();
    if ($path != '/error'):
        ?>
        <!--Main Navigation-->
        <header>
            <!--            -->
            <?php //if (isset($_SESSION['user'])): ?>
            <!--                <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">-->
            <!--                    <div class="position-sticky">-->
            <!--                        <div class="list-group list-group-flush mt-4">-->
            <!--                            <div class="accordion" id="accordionPanelsStayOpenExample">-->
            <!--                                <div class="accordion-item">-->
            <!--                                    <h2 class="accordion-header">-->
            <!--                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"-->
            <!--                                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"-->
            <!--                                            aria-controls="panelsStayOpen-collapseOne">-->
            <!--                                            <i class="fa-solid fa-ship"></i>&nbsp; Shipments-->
            <!--                                        </button>-->
            <!--                                    </h2>-->
            <!--                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">-->
            <!--                                        <div class="accordion-body p-0 pt-2">-->
            <!--                                            <ul class="list-group">-->
            <!--                                                <li class="list-group-item border-0 px-0">-->
            <!--                                                    <a href="/shipments/overview" class="btn -->
            <?php //echo $path == '/shipments/overview' ? 'text-primary': 'text-secondary'?><!-- w-100 h-100 rounded-0 border-0">-->
            <!--                                                        Shipment Overview <i class="fa-solid fa-table"></i>-->
            <!--                                                    </a>-->
            <!---->
            <!--                                                </li>-->
            <!--                                                <li class="list-group-item border-0 px-0">-->
            <!--                                                    <a href="/shipments/new" class="btn -->
            <?php //echo $path == '/shipments/new' ? 'text-primary': 'text-secondary'?><!-- w-100 h-100 rounded-0 border-0">-->
            <!--                                                        Shipment Create <i class="fa-solid fa-square-plus text-success fa-lg"></i>-->
            <!--                                                    </a>-->
            <!---->
            <!--                                                </li>-->
            <!--                                                <li class="list-group-item border-0 px-0">-->
            <!--                                                    <a href="/shipments/details" class="btn -->
            <?php //echo $path == '/shipments/details' ? 'text-primary': 'text-secondary'?><!-- w-100 h-100 rounded-0 border-0">-->
            <!--                                                        Shipment Details <i class="fa-solid fa-circle-info"></i>-->
            <!--                                                    </a>-->
            <!---->
            <!--                                                </li>-->
            <!--                                            </ul>-->
            <!--                                        </div>-->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                                <div class="accordion-item">-->
            <!--                                    <h2 class="accordion-header">-->
            <!--                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"-->
            <!--                                                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"-->
            <!--                                                aria-controls="panelsStayOpen-collapseOne">-->
            <!--                                            <i class="fa-solid fa-building"></i>&nbsp; Companies-->
            <!--                                        </button>-->
            <!--                                    </h2>-->
            <!--                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">-->
            <!--                                        <div class="accordion-body p-0 pt-2">-->
            <!--                                            <ul class="list-group">-->
            <!--                                                <li class="list-group-item border-0 px-0">-->
            <!--                                                    <a href="/company/overview" class="btn -->
            <?php //echo $path == '/company/overview' ? 'text-primary': 'text-secondary'?><!-- w-100 h-100 rounded-0 border-0">-->
            <!--                                                        Companies <i class="fa-solid fa-table"></i>-->
            <!--                                                    </a>-->
            <!---->
            <!--                                                </li>-->
            <!--                                                <li class="list-group-item border-0 px-0">-->
            <!--                                                    <a href="/company/new" class="btn -->
            <?php //echo $path == '/company/new' ? 'text-primary': 'text-secondary'?><!-- w-100 h-100 rounded-0 border-0">-->
            <!--                                                        Add Company <i class="fa-solid fa-square-plus text-success fa-lg"></i>-->
            <!--                                                    </a>-->
            <!---->
            <!--                                                </li>-->
            <!--                                            </ul>-->
            <!--                                        </div>-->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </nav>-->
            <!--            -->
            <?php //endif; ?>
            <!---->
            <!--            <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">-->
            <!--                <div class="container-fluid">-->
            <!--                    <a class="navbar-brand" href="/dashboard">-->
            <!--                        <img src="../../resources/images/logo.png" class="logo ms-3" alt="" loading="lazy" />-->
            <!--                    </a>-->
            <!--                    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"-->
            <!--                        aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">-->
            <!--                        <i class="fas fa-bars"></i>-->
            <!--                    </button>-->
            <!--                    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">-->
            <!--                        <ul class="navbar-nav mb-2 mb-lg-0">-->
            <!--                            <li class="nav-item align-self-end me-4">-->
            <!--                                <a class="nav-link -->
            <?php //echo $path == '/dashboard' ? 'text-primary': ''?><!--" aria-current="page" href="/dashboard">-->
            <!--                                    <i class="fa-solid fa-table-cells fa-lg"></i> Dashboard-->
            <!--                                </a>-->
            <!--                            </li>-->
            <!--                            -->
            <?php //if (isset($_SESSION['user'])): ?>
            <!--                                <div class="dropdown p-0 align-self-center">-->
            <!--                                    <a class="dropdown-toggle me-3 -->
            <?php //echo $path == '/profile' ? 'text-primary': 'text-secondary'?><!--" role="button" data-bs-toggle="dropdown"-->
            <!--                                        aria-expanded="false">-->
            <!--                                        {{user}}-->
            <!--                                    </a>-->
            <!--                                    <ul class="dropdown-menu dropdown-menu-end text-center">-->
            <!--                                        <li><a class="dropdown-item" href="/profile">Profile</a></li>-->
            <!--                                        <li><a class="dropdown-item" href="/settings">Settings</a></li>-->
            <!--                                        <li><a class="dropdown-item" href="/logout">Logout</a></li>-->
            <!--                                    </ul>-->
            <!--                                </div>-->
            <!--                            -->
            <?php //else: ?>
            <!--                                <div class="dropdown p-0 align-self-center">-->
            <!--                                    <a class="dropdown-toggle me-3" role="button" data-bs-toggle="dropdown"-->
            <!--                                        aria-expanded="false">-->
            <!--                                        User-->
            <!--                                    </a>-->
            <!--                                    <ul class="dropdown-menu dropdown-menu-end text-center">-->
            <!--                                        <li><a class="dropdown-item" href="/login">Login</a></li>-->
            <!--                                        <li><a class="dropdown-item" href="/register">Register</a></li>-->
            <!--                                    </ul>-->
            <!--                                </div>-->
            <!--                            -->
            <?php //endif; ?>
            <!--                        </ul>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </nav>-->
            <!--        </header>-->
            <!--Main Navigation-->
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="../../resources/images/logo.png" class="logo ms-3" alt=""
                            loading="lazy" /></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse  d-flex justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <?php if (isset($_SESSION['user'])): ?>

                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/dashboard"><i
                                            class="fa-solid fa-table-cells"></i> Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/company"><i class="fa-solid fa-building"></i> Companies</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/shipments/overview"><i class="fa-solid fa-ship"></i> Shipments</a>
                                </li>
                                <li class="nav-item mx-5">
                                    <form class="d-flex" role="search" method="get" action="/shipments/tracking">
                                        <input class="form-control me-2" name="track" type="search"
                                            placeholder="Tracking Number" aria-label="Search">
                                        <button class="btn btn-outline-success" type="submit">Track</button>
                                    </form>
                                </li>
                            <?php endif; ?>
                            <li class="nav-item dropdown">
                                <?php if (isset($_SESSION['user'])): ?>
                                    <div class="dropdown">
                                        <a class="nav-link dropdown-toggle me-3
                                <?php echo $path == '/profile' ? 'text-primary' : 'text-secondary' ?>" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            {{user}}
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end text-center">
                                            <li><a class="dropdown-item" href="/profile">Profile</a></li>
                                            <li><a class="dropdown-item" href="/settings">Settings</a></li>
                                            <li><a class="dropdown-item" href="/logout">Logout</a></li>
                                        </ul>
                                    </div>

                                <?php else: ?>
                                    <div class="dropdown">
                                        <a class="nav-link dropdown-toggle me-3" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            User
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end text-center">
                                            <li><a class="dropdown-item" href="/login">Login</a></li>
                                            <li><a class="dropdown-item" href="/register">Register</a></li>
                                        </ul>
                                    </div>

                                <?php endif; ?>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
        <?php endif; ?>
        <main>
            <div class="container-fluid pt-4">
                {{content}}
            </div>
        </main>
        <?php
        if ($path != '/error' && !isset($_SESSION['user'])):
            ?>
            <footer class="bg-dark-subtle text-primary-emphasis py-2 fixed-bottom">
                <div class="container">
                    <p class="text-center my-1">&copy; All Rights Preserved To Mohamed Haroun</p>
                </div>
            </footer>
        <?php endif; ?>
        <script src="../../resources/js/bootstrap.bundle.js"></script>
        <script src="../../resources/js/all.min.js"></script>
        <script src="../../resources/js/jquery.js"></script>
        <script src="../../resources/js/datatable.js"></script>
        <script src="../../resources/js/datatable_bootstrap.js"></script>
        <script src="../../resources/js/script.js"></script>
        <script src="../../resources/js/Charts.min.js"></script>
        <script src="../../resources/js/ajax.js"></script>
</body>

</html>