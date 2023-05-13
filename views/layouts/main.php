<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Elfath - {{page_title}}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="../../resources/images/logo.png">
    <link href="../../resources/css/all.min.css" rel="stylesheet">
    <link href="../../resources/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../resources/css/style.css" rel="stylesheet">
    <link href="../../resources/css/print.min.css" rel="stylesheet">
    <link href="../../resources/css/datatables.min.css" rel="stylesheet">
</head>

<body>
    <?php
    /**
     * @var UserModel $user
     */
    use dispatcher\Request;
    use models\UserModel;

    $request = new Request();

    $path = $request->getPath();

    $mainPath = explode('/', $path)[1];
    $secondPath = explode('/', $path)[2] ?? null;

    if ($path != '/error'):
        ?>
        <!--Main Navigation-->
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="../../resources/images/logo.png" class="logo ms-3" alt=""
                            loading="lazy" /></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 ms-auto mb-lg-0">
                            <?php if (isset($_SESSION['user'])): ?>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo $mainPath == 'companies' ? 'text-success' : '' ?>"
                                       href="/companies"><i class="fa-solid fa-building"></i> Companies</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo $mainPath == 'shipments' ? 'text-success' : '' ?>"
                                        href="/shipments/overview"><i class="fa-solid fa-ship"></i> Shipments</a>
                                </li>
                            <?php endif; ?>
                            <li class="nav-item dropdown">
                                <?php if (isset($_SESSION['user'])): ?>
                                    <div class="dropdown">
                                        <a class="nav-link dropdown-toggle me-3
                                <?php echo $mainPath == 'user' ? 'text-success' : '' ?>" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            {{user}}
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end p-0">
                                            <li><a class="dropdown-item <?php echo $secondPath == 'profile' ? 'text-success' : '' ?>"
                                                    href="/user/profile">Profile <i class="fa-regular fa-user"></i></a></li>
                                            </li>
                                            <li><a class="dropdown-item <?php echo $secondPath == 'logout' ? 'text-success' : 'text-danger' ?>"
                                                    href="/user/logout">Logout <i
                                                        class="fa-solid fa-right-from-bracket"></i></a></li>
                                        </ul>
                                    </div>

                                <?php else: ?>
                                    <div class="dropdown">
                                        <a class="nav-link dropdown-toggle <?php echo $mainPath == 'user' ? 'text-success' : '' ?> me-3"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            User
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item <?php echo $secondPath == 'login' ? 'text-success' : '' ?>"
                                                    href="/user/login"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;
                                                    Login</a></li>
                                            <li><a class="dropdown-item <?php echo $secondPath == 'register' ? 'text-success' : '' ?>"
                                                    href="/user/register"><i class="fa-solid fa-user-plus"></i>&nbsp;
                                                    Register</a></li>
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
            <div class="container-fluid p-0 h-100">
                {{content}}
            </div>
        </main>
        <?php
        if ($path != '/error' && !isset($_SESSION['user'])):
            ?>
            <footer class="bg-dark-subtle text-primary-emphasis py-2 fixed-bottom">
                <div class="container">
                    <p class="text-center my-1">&copy; All Rights Preserved To <a
                            href="https://www.facebook.com/mohamedharoun230/" target="_blank" class="text-primary">Mohamed
                            Haroun</a></p>
                </div>
            </footer>
        <?php endif; ?>
        <script src="../../resources/js/bootstrap.bundle.js"></script>
        <script src="../../resources/js/all.min.js"></script>
        <script src="../../resources/js/jquery.js"></script>
        <script src="../../resources/js/pdfmake.min.js"></script>
        <script src="../../resources/js/vfs_fonts.js"></script>
        <script src="../../resources/js/datatables.min.js"></script>
        <script src="../../resources/js/script.js"></script>
        <script src="../../resources/js/ajax.js"></script>
        <script src="../../resources/js/printThis.js"></script>
</body>

</html>