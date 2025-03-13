<?php 
session_start();  
if( isset($_SESSION["login"])){
    header("location:client/index.php");
}
    require "koneksi.php";
    if (isset($_POST["login"])){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $result = mysqli_query($conn,"SELECT * FROM tbl_user WHERE email='$email'");
    //  cek email
    if( mysqli_num_rows($result) === 1) {
    
        // cek password
        $row  = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"]) ) {
            // set session
            $_SESSION ["login"] = true;
            header("location:client/index.php");
            exit;
        }
    }
    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-sm-12 col-md-9 my-5">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome to Login</h1>
                                        <?php if(isset($error) ):?>
                                            <p style="color: red; font-style : italic;"> Wrong Username / Password!Please enter Correctly</p>
                                        <?php endif;?>
                                    </div>
                                    <form class="user" method="POST">
                                        <div class="form-group mt-3">
                                            <input type="email" class="form-control"  placeholder="Masukkan Email" autocomplete="off" required name="email">
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="password" class="form-control"  placeholder="Masukkan Password" required name="password">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block" name="login">
                                            Login
                                        </button>
                                        <p class="mt-5 d-flex justify-content-center">Don't have Account?<a href="register.php" class="">Registration</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>