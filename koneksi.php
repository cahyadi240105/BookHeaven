<?php 

// koneksi ke database

$conn = mysqli_connect("localhost","root","","store_book");

// Cek koneksi

if(mysqli_connect_errno()){
    echo"Database Connection Failed! :" .mysqli_connect_error();
}
    // function register
    function register($reg){
        global $conn;
        $nama = mysqli_escape_string($conn,$reg['nama']);
        $email = strtolower(stripslashes($reg['email']));
        $password = mysqli_escape_string($conn,$reg['password']);
        $password2 = mysqli_escape_string($conn,$reg['password2']);
  
        // cek username sudah ada atau belum
        $result =  mysqli_query($conn, "SELECT email FROM tbl_user
                   WHERE email = '$email'");
  
        if( mysqli_fetch_assoc($result)){
          echo "<script>
                  alert('e-mail already registered')
                </script>";
              return false;
        }
        // cek konfirmasi password
        if( $password !== $password2){
          echo "<script>
                  alert('Confirm password does not match')
                </script>";
          return false;
        }
        // enskripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);
        // menginput user baru 
        mysqli_query($conn,"INSERT INTO tbl_user 
            VALUES('','$nama','$email','$password')");
            return mysqli_affected_rows($conn);
    }
    // function update

    function courier($data){
    global $conn;
    // mengambil data dari form
    $id_kurir = htmlspecialchars($_POST['id_kurir']);
    $nama = htmlspecialchars($_POST['nama_kurir']);
    $tarif = htmlspecialchars($_POST['tarif']);

    // update ke database
    $qry = mysqli_query($conn,"UPDATE kurir SET nama_kurir = '$nama',tarif = '$tarif' 
    WHERE id_kurir = $id_kurir");

    return mysqli_affected_rows($conn);

    }

    function customers($count){
        global $conn;
        $id_pelanggan = htmlspecialchars($_POST['id_pelanggan']);
        $mail = htmlspecialchars($_POST['gmail_pelanggan']);
        $pass = htmlspecialchars($_POST['password_pelanggan']);
        $nama = htmlspecialchars($_POST['nama_pelanggan']);
        $tlp = htmlspecialchars($_POST['telepon_pelanggan']);

        $query = mysqli_query($conn,"UPDATE pelanggan SET gmail_pelanggan = '$mail',password_pelanggan = '$pass',nama_pelanggan = '$nama',telepon_pelanggan = '$tlp' 
        WHERE id_pelanggan = $id_pelanggan");

        return mysqli_affected_rows($conn);
    }

    function product($sum){
        global $conn;
        $id_produk = htmlspecialchars($_POST['id_produk']);
        $nama = htmlspecialchars($_POST['nama_produk']);
        $harga = htmlspecialchars($_POST['harga_produk']);
        $berat = htmlspecialchars($_POST['berat_produk']);
        $foto = htmlspecialchars($_POST['foto_produk']);
        $desk = htmlspecialchars($_POST['deskripsi_produk']);
        $resep = htmlspecialchars($_POST['resep_produk']);
        $qty = htmlspecialchars($_POST['stok_produk']);

        $hitung = mysqli_query($conn,"UPDATE produk SET nama_produk = '$nama',harga_produk = '$harga',berat_produk = '$berat',foto_produk = '$foto',deskripsi_produk = '$desk',resep_produk = '$resep',stok_produk = '$qty' WHERE id_produk = '$id_produk'");

        return mysqli_affected_rows($conn);
    }

    function purchase($dua){
        global $conn;
        $id_pembelian = htmlspecialchars($_POST['id_pembelian']);
        $id_pelanggan = htmlspecialchars($_POST['id_pelanggan']);
        $id_kurir = htmlspecialchars($_POST['id_kurir']);
        $tanggal = htmlspecialchars($_POST['tanggal_pembelian']);
        $total = htmlspecialchars($_POST['total_pembelian']);
        $tarif = htmlspecialchars($_POST['tarif']);
        $alamat = htmlspecialchars($_POST['alamat_pengirim']);
        $status = htmlspecialchars($_POST['status_pembelian']);
        $resi = htmlspecialchars($_POST['resi_pengiriman']);

        $c = mysqli_query($conn,"UPDATE pembelian SET id_pelanggan='$id_pelanggan',id_kurir='$id_kurir',tanggal_pembelian='$tanggal',total_pembelian='$total',tarif='$tarif',alamat_pengirim='$alamat',status_pembelian='$status',resi_pengiriman='$resi'
        WHERE id_pembelian = '$id_pembelian'");
        
        return mysqli_affected_rows($conn);
    }

    function product_purchase($tiga){
        global $conn;
        $id_pembelian_produk = $_POST['id_pembelian_produk'];
        $id_pembelian = $_POST['id_pembelian'];
        $id_produk = $_POST['id_produk'];
        $jmlh = $_POST['jumlah_pembelian'];

        $b = mysqli_query($conn,"UPDATE pembelian_produk SET id_pembelian ='$id_pembelian',id_produk ='$id_produk',jumlah_pembelian='$jmlh' WHERE id_pembelian_produk = $id_pembelian_produk");

        return mysqli_affected_rows($conn);
    }

    function payment($max){
        global $conn;
        $id_pembayaran = $_POST['id_pembayaran'];
        $nama = $_POST['nama'];
        $bank = $_POST['bank'];
        $jmlh = $_POST['jumlah'];
        $tanggal = $_POST['tanggal'];
        $bukti = $_POST['bukti'];
        $id_pembelian = $_POST['id_pembelian'];

        $a = mysqli_query($conn,"UPDATE pembayaran SET nama='$nama',bank ='$bank',jumlah ='$jmlh',tanggal = '$tanggal',bukti = '$bukti',id_pembelian ='$id_pembelian' WHERE id_pembayaran = '$id_pembayaran'");

        return mysqli_affected_rows($conn);
    }
    
    // function delete
    function kurir($id){
        global $conn;
        mysqli_query($conn,"DELETE FROM kurir WHERE id_kurir = '$id'");
        return mysqli_affected_rows($conn);
    }

    function pelanggan($id){
        global $conn;
        mysqli_query($conn,"DELETE FROM pelanggan WHERE id_pelanggan = '$id'");
        return mysqli_affected_rows($conn); 
    }

    function produk($id){
        global $conn;
        mysqli_query($conn,"DELETE FROM produk WHERE id_produk = '$id'");
        return mysqli_affected_rows($conn); 
    }

    function pembelian($id){
        global $conn;
        mysqli_query($conn,"DELETE FROM pembelian WHERE id_pembelian = '$id'");
        return mysqli_affected_rows($conn); 
    }

    function pembelian_produk($id){
        global $conn;
        mysqli_query($conn,"DELETE FROM pembelian_produk WHERE id_pembelian_produk = '$id'");
        return mysqli_affected_rows($conn); 
    }

    function pembayaran($id){
        global $conn;
        mysqli_query($conn,"DELETE FROM pembayaran WHERE id_pembayaran = '$id'");
        return mysqli_affected_rows($conn); 
    }
?>