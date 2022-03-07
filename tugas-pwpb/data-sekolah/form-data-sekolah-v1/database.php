<?php 

$conn = mysqli_connect('localhost', 'root', 'root', 'pwpb');

if (!$conn) {
    echo "Gagal connection ke database" . mysqli_connect_error();
}


?>