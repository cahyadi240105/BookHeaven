<?php require "template/sidebar.php" ;?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 m-0 text-gray-800">
                Purchase Data
            </h1>
        </div>
        <div class="float-right">
            <a href="../page/purchase.php" class="btn btn-primary btn-sm mb-2"><i class="fa fa-plus"></i> Insert Data</a>
        </div>
    </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Purchase list</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Customers ID</th>
                                <th>Courier ID</th>
                                <th>Purchase Date</th>
                                <th>Quantity Buy</th>
                                <th>Fare</th>
                                <th>Return Addres</th>
                                <th>Status</th>
                                <th>Receipt</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php 
                                    require "../koneksi.php";
                                    $no = 1;
                                    $data = mysqli_query($conn,"select * from pembelian ");
                                    while($d=mysqli_fetch_assoc($data)){
                                        $nama = $d['id_pelanggan'];
                                        $nama1 = $d['id_kurir'];
                                        $tgl = $d['tanggal_pembelian'];
                                        $total = $d['total_pembelian'];
                                        $tarif = $d['tarif'];
                                        $alamat = $d['alamat_pengirim'];
                                        $status = $d['status_pembelian'];
                                        $resi = $d['resi_pengiriman'];
                                ?>
                                <td><?= $no++;?></td>
                                <td><?= $nama; ?></td>
                                <td><?= $nama1;?></td>
                                <td><?= $tgl; ?></td>
                                <td><?= $total; ?> </td>
                                <td><?= $tarif; ?></td>
                                <td><?= $alamat;?></td>
                                <td><?= $status;?></td>
                                <td><?= $resi;?></td>
                                <td>
                                    <a href="../view/purchase.php?id=<?=$d['id_pembelian'];?>" class="btn btn-info mb-1"><i class='bx bxs-pencil'></i></a>
                                    <a href="../auth/purchase.php?id=<?=$d['id_pembelian'];?>"  onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?');" class="btn btn-danger"><i class='bx bxs-trash'></i></a>
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