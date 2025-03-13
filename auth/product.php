<?php 
    require '../koneksi.php';

    $id = $_GET['id'];

    if(produk($id) > 0){
        echo "
            <script>
                alert('Data Delete Successfully');
                document.location.href = '../client/product.php';
            </script>";
    }else{
        echo "
            <script>
                alert('Data Delete Failed');
                document.location.href = '../client/product.php';
            </script>";
    }
?>