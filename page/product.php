<?php 
    require "../koneksi.php";
    if(isset($_POST['add'])){
        $nama = htmlspecialchars($_POST['nama']);
        $harga = htmlspecialchars($_POST['harga']);
        $berat = htmlspecialchars($_POST['berat']);
        $foto = htmlspecialchars($_POST['foto']);
        $desc = htmlspecialchars($_POST['deskripsi']);
        $rsp = htmlspecialchars($_POST['resep']);
        $stk = htmlspecialchars($_POST['stok']);

        $qry = mysqli_query($conn,"INSERT INTO produk VALUES('','$nama','$harga','$berat','$foto','$desc','$rsp','$stk')");

        if($qry){
            echo"<script>
                    alert('data added successfully');
                    window.location = '../client/product.php';
                </script>";
        }else{
            echo"<script>
                    alert('data added failed');
                    window.location ='../client/product.php';
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

    <title>Insert Product</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" href="../img/.png">

</head>

<body class="bg-gradient-primary">

    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-lg-6 my-5">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="../img/.png" alt="" class="img-fluid" width="90">
                                <h2 class="h4 text-gray 900 mb-2">Insert Product Data</h2>
                            </div>
                            <form action="" method="post" class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control" placeholder="Nama Produk" name="nama" autocomplete="off" required="">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control"  placeholder="Harga Produk" name="harga" autocomplete="off" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="number" class="form-control" placeholder="Berat Produk" name="berat" autocomplete="off" required="">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Foto Produk" name="foto" autocomplete="off" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control" placeholder="Deskripsi Produk" name="deskripsi" autocomplete="off" required="">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Resep Produk" name="resep" autocomplete="off" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                     <input type="number" class="form-control" placeholder="Stok Produk" name="stok" autocomplete="off" required="">
                                </div>
                                <div class="form-group d-flex">
                                    <button type="submit" class="btn btn-primary" name="add">Insert</button>
                                    <a href="../client/product.php" class="btn btn-danger mx-2" onclick= "return confirm('Anda Yakin Ingin Meninggalkan Halaman Ini')"><i class="fas fa-backward"></i> Kembali</a>
                                </div>
                            </form>
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