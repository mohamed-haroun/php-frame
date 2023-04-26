<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Owner - {{page_title}}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="/resources/main/main.css">
</head>
<body style="font-family: 'Cairo', sans-serif;">

<?php
/**
 * @var UserModel $user
 */

use dispatcher\Request;
use models\UserModel;

$request = new Request();
$path = $request->getPath();
if ($path != '/error'):
    ?>
    <header class="m-0">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand text-dark fw-bold" href="/">Own<span class="text-primary">er</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link <?= $path == '/'? 'text-primary': '';?>" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $path == '/about'? 'text-primary': '';?>" aria-current="page" href="/about">About US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $path == '/contact'? 'text-primary': '';?>" aria-current="page" href="/contact">Contact Us</a>
                        </li>
                        <li class="nav-item dropdown-center">
                            <a class="nav-link dropdown-toggle <?= $path == '/profile'? 'text-primary': '';?>"
                               href="#"
                               role="button"
                               data-bs-toggle="dropdown"
                               aria-expanded="false">
                                {{user}}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-lg-end">
                                <li><a class="dropdown-item <?= $path == '/profile'? 'text-primary': '';?>"
                                       href="/profile">Profile</a></li>
                                <li><a class="dropdown-item <?= $path == '/logout'? 'text-primary': '';?>"
                                       href="/logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<?php endif;?>
<main class="m-0 p-0">
    {{content}}
</main>

<footer class=" bg-dark text-white-50 py-2 lh-2">
    <div class="container">
        <p> &copy; All rights are preserved to <a href="https://www.linkedin.com/in/mohamed-haroun-673b67122/" class="text-primary">Mohamed Haroun</a></p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>