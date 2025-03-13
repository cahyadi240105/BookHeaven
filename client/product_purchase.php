<?php require "template/sidebar.php" ;?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 m-0 text-gray-800">
                Product Purchase Data
            </h1>
        </div>
        <div class="float-right">
            <a href="../page/product_purchase.php" class="btn btn-primary btn-sm mb-2"><i class="fa fa-plus"></i> Insert Data</a>
        </div>
    </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Product Purchase list</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Purchase ID</th>
                                <th>Product ID</th>
                                <th>Purchase Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php 
                                    require "../koneksi.php";
                                    $no = 1;
                                    $data =  mysqli_query($conn,"select * from pembelian_produk ");
                                    while($d=mysqli_fetch_array($data)){
                                        $tgl = $d['id_pembelian'];
                                        $nama = $d['id_produk'];
                                        $jmlh = $d['jumlah_pembelian']
                                ?>
                                <td><?= $no++;?></td>
                                <td><?= $tgl; ?></td>
                                <td><?= $nama; ?></td>
                                <td><?= $jmlh;?></td>
                                <td>
                                    <a href="../view/product_purchase.php?id_pembelian_produk=<?= $d['id_pembelian_produk'];?>" class="btn btn-info"><i class='bx bxs-pencil'></i></a>
                                    <a href="../auth/product_purchase.php?id_pembelian_produk=<?= $d['id_pembelian_produk'];?>" class="btn btn-danger"  onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?');"><i class='bx bxs-trash'></i></a>
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