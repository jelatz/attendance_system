<?php
include("back/DBhelper.php");

if (isset($_POST['login'])) {
    $user = validate($_POST['email']);
    $pass = validate($_POST['password']);
    
    $login = login($user, $pass);

    if (sizeof($login) > 0) {
        header("Location: front/dashboard.php");
    } else {
        header("Location:index.php?error=Incorrect Username or Password");
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">
    <title>Login Page</title>
</head>

<body>
    <div class="container-fluid bg-dark-subtle">
        <div class="row justify-content-center align-items-center flex-column gap-5" style="min-height:100vh;">
            <div class="col-lg-5 text-center">
                <img src="#" alt="Attendance System with SMS LOGO">
            </div>
            <div class="col-lg-4 bg-secondary p-5 pb-4 rounded-2">
                <form action="#" method="POST">
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error alert alert-danger">
                            <?php echo $_GET['error']; ?>
                        </p>
                    <?php } ?>
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div>
                        <a href="#" class="nav-link">Forgot Password?</a>
                    </div>
                    <div class="mb-3 d-flex align-items-center">
                        <input type="checkbox" id="remember-me">
                        <label for="remember-me" class="ms-2 mb-0">Remember Me</label>
                    </div>
                    <div class="mt-4 mb-2">
                        <input type="submit" class="btn btn-primary rounded-2 fw-bold text-center w-100" name="login" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>