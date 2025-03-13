<?php 
    require '../koneksi.php';

    $id = $_GET['id'];

    if(pelanggan($id) > 0){
        echo "
            <script>
                alert('Data Delete Successfully');
                document.location.href = '../client/customers.php';
            </script>";
    }else{
        echo "
            <script>
                alert('Data Delete Failed');
                document.location.href = '../client/customers.php';
            </script>";
    }
?>