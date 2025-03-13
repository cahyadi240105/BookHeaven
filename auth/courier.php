<?php 
    require '../koneksi.php';

    $id = $_GET['id'];

    if(kurir($id) > 0){
        echo "
            <script>
                alert('Data Delete Successfully');
                document.location.href = '../client/courier.php';
            </script>";
    }else{
        echo "
            <script>
                alert('Data Delete Failed');
                document.location.href = '../client/courier.php';
            </script>";
    }
?>