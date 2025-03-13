<?php
    include '../koneksi.php';
    $id_pembayaran = $_GET['id_pembayaran'];
    $data = mysqli_query($conn,"SELECT * FROM pembayaran WHERE id_pembayaran = '$id_pembayaran'");
    while($d = mysqli_fetch_array($data)){
        if(isset($_POST['add'])){
            if(payment($_POST)>0){
                echo "
                <script>
                    alert('Changes Data Successfully');
                    document.location.href = '../client/payment.php';
                </script>";
            }else{
                echo "
                <script>
                    alert('Changes Data Failed');
                    document.location.href = '../client/payment.php';
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

    <title>Update Payment</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-lg-6 my-5">
                <div class="card ">
                    <div class="card-header">
                        <div class="card-body">
                            <div class="text-center">
                                <h2 class="h4 text-gray 900 mb-2">Update Payment Data</h2>
                            </div>
                            <form action="" method="post" class="user">
                                <input type="hidden" name="id_pembayaran" value="<?=$d['id_pembayaran'];?>">
                                <div class="form-group">
                                    <input type="text" class="form-control " placeholder="Nama" name="nama" autocomplete="off" required="" value="<?=$d['nama'];?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control " placeholder="Bank" name="bank" autocomplete="off" required="" value="<?=$d['bank'];?>">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control " placeholder="Harga" name="jumlah" autocomplete="off" required="" value="<?=$d['jumlah'];?>">
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control " placeholder="Tanggal" name="tanggal" autocomplete="off" required="" value="<?=$d['tanggal'];?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control " placeholder="Bukti" name="bukti" autocomplete="off" required="" value="<?=$d['bukti'];?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control " placeholder="Id_Pembelian" name="id_pembelian" autocomplete="off" required="" value="<?=$d['id_pembelian'];?>">
                                </div>
                                <div class="form-group d-flex">
                                    <button type="submit" class="btn btn-primary" name="add">Update</button>
                                    <a href="../client/payment.php" class="btn btn-danger mx-2" onclick= "return confirm('Anda Yakin Ingin Meninggalkan Halaman Ini')"><i class="fas fa-backward"></i> Kembali</a>
                                </div>
                            </form>
                            <?php } ?>
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