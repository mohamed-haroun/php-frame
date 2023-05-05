<?php
/**
 * @var $errors
 * @var UserModel $user
 * */

use models\UserModel;

if (isset($_SESSION['user_register'])) {
    $user = unserialize($_SESSION['user_register']);
    $errors = $user->errors??[];
    if (!$errors) {
        header('Location: /profile');
    }
    unset($_SESSION['user_register']);
}
?>


<div class="container py-4 my-4">
    <div class="w-50 mx-auto p-5 shadow bg-white border rounded">
        <div class="mb-4">
            <h3 class="text-center fw-bold py-4 border-bottom mb-3">Sign<span class="text-primary"> Up</span></h3>
        </div>
        <form method="post" action="/register">
            <div class="row mb-3">
                <div class="col">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text"
                           name="first_name"
                           <?php if (isset($user)){
                               echo 'value="' . $user->first_name . '"';
                           } ?>
                           class="form-control <?php if (isset($errors)) echo isset($errors['first_name'])? 'is-invalid' : 'is-valid'?>"
                           aria-label="First name" id="first_name">
                    <div class="invalid-feedback">
                        <?php echo $errors['first_name'][0]?>
                    </div>
                    <div class="valid-feedback">
                        Accepted first name
                    </div>
                </div>
                <div class="col">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text"
                           name="last_name"
                            <?php if (isset($user)){
                                echo 'value="' . $user->last_name . '"';
                            } ?>
                           class="form-control <?php if (isset($errors)) echo isset($errors['last_name'])? 'is-invalid' : 'is-valid'?>"
                           aria-label="Last name"
                           id="last_name">
                    <div class="invalid-feedback">
                        <?php echo $errors['last_name'][0]?>

                    </div>
                    <div class="valid-feedback">
                        Accepted last name
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email"
                       name="email"
                    <?php if (isset($user)){
                        echo 'value="' . $user->email . '"';
                    } ?>
                       class="form-control <?php if (isset($errors)) echo isset($errors['email'])? 'is-invalid' : 'is-valid'?>"
                       id="email">
                <div class="invalid-feedback">
                    <?php echo isset($errors['email'])?  $errors['email'][0]: 'looks Good'?>
                </div>
                <div class="valid-feedback">
                    Accepted email
                </div>
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input type="password"
                       name="pass"
                       minlength="8"
                       maxlength="64"
                       class="form-control <?php if (isset($errors))echo isset($errors['pass'])? 'is-invalid' : 'is-valid'?>"
                       id="pass">
                <div class="invalid-feedback">
                    <?php echo isset($errors['pass'])?  $errors['pass'][0]: 'looks Good'?>
                </div>
                <div class="valid-feedback">
                    Accepted Password
                </div>
            </div>
            <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input type="password"
                       name="confirmPassword"
                       minlength="8"
                       maxlength="64"
                       class="form-control <?php if (isset($errors)) echo isset($errors['confirmPassword'])? 'is-invalid' : 'is-valid'?>"
                       id="confirmPassword">
                <div class="invalid-feedback">
                    <?php echo isset($errors['confirmPassword'])?  $errors['confirmPassword'][0]: 'looks Good'?>
                </div>
                <div class="valid-feedback">
                    Accepted password confirm
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100 fw-bold">Sign Up</button>
        </form>
        <p class="text-center mt-5 mb-0">Already have an account ? <a href="/login" class="text-primary fw-bold">Login</a></p>
    </div>
</div>