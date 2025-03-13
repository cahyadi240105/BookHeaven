<?php require "template/sidebar.php" ;?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 m-0 text-gray-800">
                Courier Data
            </h1>
        </div>
        <div class="float-right">
            <a href="../page/courier.php" class="btn btn-primary btn-sm mb-2"><i class="fa fa-plus"></i> Insert Data</a>
        </div>
    </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-3">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Courier list</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Courier Name</th>
                                <th>Fare</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                require "../koneksi.php";
                                $no = 1;
                                $data = mysqli_query($conn,"SELECT * FROM kurir");
                                while($d = mysqli_fetch_assoc($data)){
                            ?>
                            <tr>
                                <td><?= $no++;?></td>
                                <td><?= $d['nama_kurir']; ?></td>
                                <td><?= $d['tarif'];?></td>
                                <td>
                                    <a href="../view/courier.php?id=<?= $d['id_kurir'];?>" class="btn btn-info"><i class='bx bxs-pencil' ></i></a> 
                                    <a href="../auth/courier.php?id=<?= $d['id_kurir'];?>" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?');" class="btn btn-danger"><i class='bx bxs-trash'></i></a>
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