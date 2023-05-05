<?php

/**
 * @var string $password_message
 * @var string $email_message
 *
 */

use middlewares\SessionHandlerMiddleware;

$session = new SessionHandlerMiddleware();

if (isset($_SESSION['data'])) {
    $data = $_SESSION['data'];
    unset($_SESSION['data']);
    $password_message = $_SESSION['password_message'] ?? null;
    $email_message = $_SESSION['email_message'] ?? null;

    if ($password_message) {
        unset($_SESSION['password_message']);
    }
    if ($email_message) {
        unset($_SESSION['email_message']);
    }
}

?>

<div class="container">
    <?php
    if ($session->getFlash('notLogged') !== null):
        ?>
        <div class="alert alert-danger text-center mt-2" role="alert">
            <?php echo $session->getFlash('notLogged') ?>
        </div>
    <?php endif; ?>
    <div class="w-50 mx-auto mb-5 p-5 bg-white shadow border rounded">
        <div class="mb-3">
            <h3 class="text-center py-4 border-bottom fw-bold">Log<span class="text-primary">in</span></h3>
        </div>
        <form method="post" action="/login">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control  <?php echo isset($email_message) ? 'is-invalid' : '' ?>"
                    name="email" value="<?php echo $data['email'] ?? '' ?>" id="email" required>
                <div class="invalid-feedback">
                    <?php echo $email_message; ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control <?php echo isset($password_message) ? 'is-invalid' : '' ?>"
                    name="password" value="<?php echo $data['password'] ?? '' ?>" id="password" required>
                <div class="invalid-feedback">
                    <?php echo $password_message; ?>
                </div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="keepLogged" id="keepLogged" checked>
                <label class="form-check-label" for="keepLogged">Keep me logged in</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
        <p class="text-center mt-5 mb-0">Don't have an account yet? <a href="/register"
                class="text-primary fw-bold">Sign Up</a></p>
    </div>
</div>