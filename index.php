<?php
// session_start();
include_once "back\DBhelper.php";

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $pass = $_POST['password'];
    $login = login($email,$pass);
    if($login){
        header("Location: front/event.php");
    }elseif($login == null){
        header("Location:index.php?notRegistered= Email not Registered");
    }
    else{
        header("Location:index.php?error= Incorrect Password");
        exit();
    }

if(isset($_GET['error'])){
    echo "<script>window.alert('Incorrect Password')</script>";
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
    <div class="container w-100 h-100">
        <div class="row h-100 d-flex justify-content-center align-items-center">
            <div class="col-lg-5 text-center login-form p-4 rounded-3">
                <form action="#" method="POST">
                    <div class="mb-3">
                        <h3><strong>Login</strong></h3>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="username" class="form-control h-25" name="email" id="floatingInput" placeholder="Username">
                        <label for="floatingInput">Email</label>
                        <div class="row justify-content-start text-start">
                        <?php
                        if(isset($_GET['notRegistered'])){
                            ?> <small class="text-danger"><?php echo $_GET['notRegistered'] ?></small><?php
                        }
                    ?>
                    </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control h-25" name="password" id="floatingPass" placeholder="Password">
                        <label for="floatingPass">Password</label>
                    </div>
                    <!-- <div class="mb-1 text-start d-flex align-items-center">
                        <input type="checkbox" class="checkbox" name="remember"><span class="ms-2">Remember Password</span>
                    </div> -->
                    <div class="mb-3 text-start">
                        <a href="forgotpass.php" class="text-decoration-none text-dark text-start ms-1 forgotPass"><small>Forgot Password?</small></a>
                    </div>
                    <div class="mt-4">
                        <input type="submit" name="login" value="Login" class="login-btn text-white rounded-3">
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