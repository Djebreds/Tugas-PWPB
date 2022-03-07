<?php 

$nama = $_POST['nama'];
$username = $_POST['username'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$kelamin = $_POST['jenis'];
$lahir = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$alamat = $_POST['alamat'];
$pos = $_POST['pos'];
$ibu = $_POST['ibu'];
$bapak = $_POST['bapak'];

echo "<h1>HASIL</h1>";
echo "Nama : " . $nama . "<br>";
echo "Username : " . $username . "<br>";
echo "Password : " . $password . "<br>";
echo "Phone : " . $phone . "<br>";
echo "Jenis Kelamin : " . $kelamin . "<br>";
echo "Tempat Lahir : " . $lahir . "<br>";
echo "Tanggal Lahir : " . $tanggal . "<br>";
echo "Alamat : " . $alamat . "<br>";
echo "Kode POS : " . $pos . "<br>";
echo "Nama IBU : " . $ibu . "<br>";
echo "Nama BAPAK : " . $bapak . "<br>";





?>