<?php require "template/sidebar.php" ;?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 m-0 text-gray-800">
                Payment Data
            </h1>
        </div>
        <div class="float-right">
            <a href="../page/payment.php" class="btn btn-primary btn-sm mb-2"><i class="fa fa-plus"></i> Insert Data</a>
        </div>
    </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Payment list</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Bank</th>
                                <th>Price</th>
                                <th>Date</th>
                                <th>Token</th>
                                <th>Purchase ID</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <?php 
                                    require "../koneksi.php";
                                    $no = 1;
                                    $data = mysqli_query($conn,"select * from pembayaran");
                                    while($d=mysqli_fetch_assoc($data)){
                                        $nama = $d['nama'];
                                        $bank = $d['bank'];
                                        $jmlh = $d['jumlah'];
                                        $tgl = $d['tanggal'];
                                        $bukti = $d['bukti'];
                                        $beli = $d['id_pembelian'];
                                ?>
                                <td><?= $no++;?></td>
                                <td><?= $nama;?></td>
                                <td><?= $bank;?></td>
                                <td><?= $jmlh;?> </td>
                                <td><?= $tgl?></td>
                                <td><?= $bukti;?></td>
                                <td><?= $beli; ?></td>
                                <td>
                                    <a href="../view/payment.php?id_pembayaran=<?=$d['id_pembayaran'];?>" class="btn btn-info"><i class='bx bxs-pencil'></i></a>
                                    <a href="../auth/payment.php?id_pembayaran=<?=$d['id_pembayaran'];?>" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?');" class="btn btn-danger"><i class='bx bxs-trash'></i></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

<?php require "template/footer.php" ;?>