<?php 
    require '../koneksi.php';

    $id = $_GET['id'];

    if(pembelian($id) > 0){
        echo "
            <script>
                alert('Data Delete Successfully');
                document.location.href = '../client/purchase.php';
            </script>";
    }else{
        echo "
            <script>
                alert('Data Delete Failed');
                document.location.href = '../client/purchase.php';
            </script>";
    }
?>