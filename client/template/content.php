    <?php 
    
    require "../koneksi.php";
    $count = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM produk"));
    
    $count2 = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM pembelian"));
    
    $count3 = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM pembelian_produk"));

    $count4 = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM pembayaran "));

    $count5 = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM pelanggan "));

    $count6 = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM kurir "));
    ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 mx-4 text-gray-800">Dashboard</h1>
        </div>
        <div class="container">
        <div class="jumbotron bg-gradient-primary mb-3">
            <p class="text-white">Welcome too App Book Store</p>
            <!-- Content Row -->
            <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <a href="./product.php">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Product Data</div></a>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?='<h5 class="white-text link">'.$count.' </h5>'; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-box fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <a href="./purchase.php">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Purchase Data</div></a>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?='<h5 class="white-text link">'.$count2.'</h5>'; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-fw fa-file-invoice fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <a href="./product_purchase.php">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Product Purchase Data</div></a>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?='<h5 class="white-text link">'.$count3.'</h5>'; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-fw fa-file-invoice fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <a href="./payment.php">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Payment Data</div></a>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?='<h5 class="white-text link">'.$count4.'</h5>'; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-fw fa-credit-card fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-secondary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <a href="./customers.php">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Customers Data</div></a>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?='<h5 class="white-text link">'.$count5.'</h5>'; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-fw fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-secondary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <a href="./courier.php">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Courier Data</div></a>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?='<h5 class="white-text link">'.$count6.'</h5>'; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-fw fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>
    </div>
</div>