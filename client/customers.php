<?php require "template/sidebar.php" ;?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 m-0 text-gray-800">
                Customer Data
            </h1>
        </div>
        <div class="float-right">
            <a href="../page/customers.php" class="btn btn-primary btn-sm mb-2"><i class="fa fa-plus"></i> Insert Data</a>
        </div>
    </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Customers list</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Customers Gmail</th>
                                <th>Customers Name</th>
                                <th>Customers Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php 
                                require "../koneksi.php";
                                $no = 1;
                                $data = mysqli_query($conn,"select * from pelanggan");
                                while($d = mysqli_fetch_assoc($data)){
                                    $gmail = $d['gmail_pelanggan'];
                                    $nama = $d['nama_pelanggan'];
                                    $telp = $d['telepon_pelanggan'];
                            ?>
                            <tr>
                                <td><?= $no++;?></td>
                                <td><?= $gmail; ?></td>
                                <td><?= $nama;?></td>
                                <td><?= $telp;?></td>
                                <td>
                                    <a href="../view/customers.php?id=<?= $d['id_pelanggan'];?>" class="btn btn-info"><i class='bx bxs-pencil'></i></a>
                                    <a href="../auth/customers.php?id=<?= $d['id_pelanggan'];?>" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?');" class="btn btn-danger"><i class='bx bxs-trash'></i></a>
                                </td>
                            </tr>
                            <?php 
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

<?php require "template/footer.php" ;?>