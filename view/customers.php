<?php 

    require "../koneksi.php";
    $id_pelanggan = $_GET['id'];
    $data = mysqli_query($conn,"SELECT * FROM pelanggan where id_pelanggan = '$id_pelanggan'");
    while($d = mysqli_fetch_array($data)){
    if(isset($_POST["add"])) {

        // cek apakah data berhasil ditambahkan apa tidak
        if (customers($_POST) > 0 ){
            echo "
            <script>
                alert('Changes Data Successfully');
                document.location.href = '../client/customers.php';
            </script>";
        }else{
            echo "
            <script>
                alert('Changes Data Failed');
                document.location.href = '../client/customers.php';
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

    <title>Insert Customers</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" href="../img/kurir.png">

</head>

<body class="bg-gradient-primary">

    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-lg-6 my-5">
                <div class="card my-4">
                    <div class="card-header">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="../img/kurir.png" alt="" class="img-fluid" width="90">
                                <h2 class="h4 text-gray 900 mb-2">Update Customers Data</h2>
                            </div>
                            <form action="" method="post" class="user">
                                <div class="form-group">
                                    <input type="hidden" name="id_pelanggan" value="<?= $d['id_pelanggan']; ?>">
                                     <input type="email" class="form-control" placeholder="email@example.com" name="gmail_pelanggan" autocomplete="off" value="<?= $d['gmail_pelanggan'];?>">
                                </div>
                                <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Nama" name="nama_pelanggan" autocomplete="off" value="<?=$d['nama_pelanggan'];?>">
                                </div>
                                <div class="form-group">
                                     <input type="password" class="form-control" placeholder="Password" name="password_pelanggan" autocomplete="off" 
                                     value="<?=$d['password_pelanggan'];?>">
                                </div>
                                <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Telepon" name="telepon_pelanggan" autocomplete="off" value="<?=$d['telepon_pelanggan'];?>">
                                </div>
                                <div class="form-group d-flex">
                                    <button type="submit" class="btn btn-primary" name="add">Update</button>
                                    <a href="../client/customers.php" class="btn btn-danger mx-2" onclick= "return confirm('Anda Yakin Ingin Meninggalkan Halaman Ini')"><i class="fas fa-backward"></i> Kembali</a>
                                </div>
                            </form>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>