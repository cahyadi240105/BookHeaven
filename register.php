<?php 

    require "koneksi.php";
    if(isset($_POST['register'])){
        if(register($_POST) > 0){
            echo"<script>
                    alert('registration has been successful');
                    document.location.href = 'index.php';
                </script>";
        }else{
            echo"<script>
                    alert('registration has failed');
                    document.location.href = 'register.php';
                </script>";
        }
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

    <title>Register</title>

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
                <div class="card o-hidden border-0 shadow-lg my-2">
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
                                        <h1 class="h4 text-gray-900 mb-4">Create Account</h1>
                                    </div>
                                    <form class="user" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  placeholder="Enter Full Name" autocomplete="off" required name="nama">
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="email" class="form-control"  placeholder="Enter Email" autocomplete="off" required name="email">
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="password" class="form-control"  placeholder="Enter Password" autocomplete="off" required name="password">
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="password" class="form-control"  placeholder="Repeat Password" required name="password2" autocomplete="off">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block" name="register">
                                            Submit
                                        </button>
                                        <p class="mt-5 d-flex justify-content-center">Already Account?<a href="index.php" class="">Login</a></p>
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