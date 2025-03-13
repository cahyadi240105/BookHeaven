<?php 
    require '../koneksi.php';

    $id = $_GET['id_pembelian_produk'];

    if(pembelian_produk($id) > 0){
        echo "
            <script>
                alert('Data Delete Successfully');
                document.location.href = '../client/product_purchase.php';
            </script>";
    }else{
        echo "
            <script>
                alert('Data Delete Failed');
                document.location.href = '../client/product_purchase.php';
            </script>";
    }
?>