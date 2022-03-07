<?php 
$connect = mysqli_connect('localhost', 'root', 'root', 'Nama_Database');

if (!$connect) {
  die("Gagal Menghubungkan ke database" . mysqli_connect_error($connect));
}



?> 
