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
    <link href="../../resources/css/main.css">
  </head>
  <body style="font-family: 'Cairo', sans-serif;">

  <?php
  $request = new \dispatcher\Request();
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
                    <a class="nav-link dropdown-toggle <?= $path == '/login' || $path == '/register'? 'text-primary': '';?>"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">
                        User
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg-end">
                        <li><a class="dropdown-item <?= $path == '/login'? 'text-primary': '';?>"
                               href="/login">Login</a></li>
                        <li><a class="dropdown-item <?= $path == '/register'? 'text-primary': '';?>"
                               href="/register">Register</a></li>
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

  <?php
  $request = new \dispatcher\Request();
  $path = $request->getPath();
  if ($path != '/error'):
  ?>
  <footer class=" bg-dark text-white-50 d-grid">
      <div class="container">
          <div class="row py-5">
              <div class="col">
                  <h4 class="fw-bold text-white mb-4">Own<span class="text-primary">er</span></h4>
                  <address>
                      <p>Sadat City, Menofia</p>
                      <p>21 N 2nd Area</p>
                      <p>Egypt</p>
                  </address>
                  <div>
                      <p>(+20)01275890190</p>
                      <p>MAP / DIRECTIONS</p>
                  </div>
              </div>
              <div class="col">
                  <h6 class="fw-bold">Site Map</h6>
                  <ul class="navbar-nav mb-2 mb-lg-0 w-50">
                      <li class="nav-item">
                          <a class="nav-link border-bottom border-primary-subtle" aria-current="page" href="/">Home</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link border-bottom border-primary-subtle" aria-current="page" href="/about">About US</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link border-bottom border-primary-subtle" aria-current="page" href="/contact">Contact Us</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link border-bottom border-primary-subtle" aria-current="page" href="/login">Login</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link border-bottom border-primary-subtle" aria-current="page" href="/register">Register</a>
                      </li>
                  </ul>
              </div>
              <div class="col-5">
                  <h3 class="fw-bold my-3">Subscribe in the <span class="text-primary">Newsletters</span></h3>
                  <form>
                      <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Enter Your E-mail" aria-label="Recipient's username" aria-describedby="button-addon2">
                          <button class="btn btn-danger" type="button" id="button-addon2">Subscribe</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </footer>
  <?php endif;?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>