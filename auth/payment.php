<?php 
    require '../koneksi.php';

    $id = $_GET['id_pembayaran'];

    if(pembayaran($id) > 0){
        echo "
            <script>
                alert('Data Delete Successfully');
                document.location.href = '../client/payment.php';
            </script>";
    }else{
        echo "
            <script>
                alert('Data Delete Failed');
                document.location.href = '../client/payment.php';
            </script>";
    }
?>