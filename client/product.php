<?php require "template/sidebar.php" ;?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 m-0 text-gray-800">
                Product Data
            </h1>
        </div>
        <div class="float-right">
            <a href="../page/product.php" class="btn btn-primary btn-sm mb-2"><i class="fa fa-plus"></i> Insert Data</a>
        </div>
    </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Product list</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Weight</th>
                                <th>Photo</th>
                                <th>Description</th>
                                <th>Recipe</th>
                                <th>Quantity</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php 
                                    require "../koneksi.php";
                                    $no = 1;
                                    $data = mysqli_query($conn,"select * from produk");
                                    while($d=mysqli_fetch_assoc($data)){
                                        $nama = $d['nama_produk'];
                                        $harga = $d['harga_produk'];
                                        $berat = $d['berat_produk'];
                                        $foto = $d['foto_produk'];
                                        $desc = $d['deskripsi_produk'];
                                        $resep = $d['resep_produk'];
                                        $qty = $d['stok_produk'];
                                ?>
                                <td><?= $no++;?></td>
                                <td><?= $nama; ?></td>
                                <td><?= $harga; ?></td>
                                <td><?= $berat; ?> </td>
                                <td><?= $foto; ?></td>
                                <td><?= $desc;?></td>
                                <td><?= $resep;?></td>
                                <td><?= $qty;?></td>
                                <td>
                                    <a href="../view/product.php?id=<?=$d['id_produk'];?>" class="btn btn-info mb-1"><i class='bx bxs-pencil'></i></a>
                                    <a href="../auth/product.php?id=<?=$d['id_produk'];?>" class="btn btn-danger"  onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?');"><i class='bx bxs-trash'></i></a>
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