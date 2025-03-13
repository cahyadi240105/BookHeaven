<?php 
    require "../koneksi.php";
    if(isset($_POST['add'])){
        $nama = htmlspecialchars($_POST['id_pelanggan']);
        $nama_kurir = htmlspecialchars($_POST['id_kurir']);
        $tgl = htmlspecialchars($_POST['tgl']);
        $total = htmlspecialchars($_POST['total']);
        $tarif = htmlspecialchars($_POST['tarif']);
        $almt = htmlspecialchars($_POST['alamat']);
        $status = htmlspecialchars($_POST['status']);
        $resi = htmlspecialchars($_POST['resi']);
        

        $qry = mysqli_query($conn,"INSERT INTO pembelian VALUES('','$nama','$nama_kurir','$tgl','$total','$tarif','$almt','$status','$resi')");

        if($qry){
            echo"<script>
                    alert('data added successfully');
                    window.location = '../client/purchase.php';
                </script>";
        }else{
            echo"<script>
                    alert('data added failed');
                    window.location ='../client/purchase.php';
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
                                <img src="../img/kurir.png" alt="" class="img-fluid" width="90">
                                <h2 class="h4 text-gray 900 mb-2">Insert Purchase Data</h2>
                            </div>
                            <form action="" method="post" class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="number" class="form-control " placeholder="Id_Pelanggan" name="id_pelanggan" autocomplete="off" required="">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control " placeholder="Id_Kurir" name="id_kurir" autocomplete="off" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="date" class="form-control " placeholder="Tanggal Beli" name="tgl" autocomplete="off" required="">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control " placeholder="Total Beli" name="total" autocomplete="off" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="number" class="form-control " placeholder="Tarif" name="tarif" autocomplete="off" required="">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control " placeholder="Alamat Pengirim" name="alamat" autocomplete="off" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control " placeholder="Status" name="status" autocomplete="off" required="">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control " placeholder="Resi Pengirim" name="resi" autocomplete="off" required="">
                                    </div>
                                </div>
                                <div class="form-group d-flex">
                                    <button  type="submit" class="btn btn-primary" name="add">Insert</button>
                                    <a href="../client/purchase.php" class="btn btn-danger mx-2" onclick= "return confirm('Anda Yakin Ingin Meninggalkan Halaman Ini')"><i class="fas fa-backward"></i> Kembali</a>
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