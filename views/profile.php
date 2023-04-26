<?php
use middlewares\SessionHandlerMiddleware;
use dispatcher\Response;

$session = new SessionHandlerMiddleware();


if (!isset($_SESSION['user'])) {
   $session->setFlash('notLogged', 'You Must login to your account first !!!');
    (new Response())->redirect('/login');
}

?>

<div class="container">
    <div class="mx-auto my-5">
        <?php
        if ($session->getFlash('success') !== null):?>
            <div class="alert alert-success" role="alert">
                <?php echo $session->getFlash('success')?>
            </div>
        <?php endif;?>
    </div>
</div>
