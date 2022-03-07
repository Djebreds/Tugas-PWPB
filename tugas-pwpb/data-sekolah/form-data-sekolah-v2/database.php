<?php 
// melakukan koneksi ke database
$conn = mysqli_connect('localhost', 'root', 'root', 'pwpb');
// cek koneksi
if (!$conn) {
    echo "Gagal connection ke database" . mysqli_connect_error();
}


?>