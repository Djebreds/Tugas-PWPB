<?php 
require 'hubung.php';

$brg = "SELECT * FROM Barang";
$barang = mysqli_query($connect, $brg);
$byr = "SELECT * FROM Buyer";
$buyer = mysqli_query($connect, $byr);


?> 


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simpan</title>
</head>
<body>
    
    <h2>Tabel Barang dan Buyer</h2>  
    <h3>From Form Barang</h3>
      <p><a href="barang.php">Tambahkan Barang</a></p>
      <table border="1" cellpadding='10' cellspacing='1'>
        <tr>
          <th colspan="3">Barang</th>
        </tr>
        <tr>
          <th>Kode Barang</th>
          <th>Nama Barang</th>
          <th>Harga Satuan</th>
        </tr>
        <?php foreach ($barang as $brg) : ?> 
        <tr>
          <td><?php echo $brg["Kode Barang"]; ?> </td>
          <td><?php echo $brg["Nama Barang"]; ?> </td>
          <td>Rp. <?php echo $brg["Harga Satuan"]; ?> </td>
        </tr>
        <?php endforeach; ?> 
      </table>

      <h3>From Form Buyer</h3>
      <p><a href="buyer.php">Tambahkan Buyer</a></p>
      
      <table border="1" cellpadding='10' cellspacing='1'>
        <tr>
          <th colspan="3">Buyer</th>
        </tr>
        <tr>
          <th>Kode Buyer</th>
          <th>Nama Buyer</th>
          <th>Alamat</th>
        </tr>
        <?php foreach($buyer as $byr) : ?> 
        <tr>
          <td><?php echo $byr["Kode Buyer"]; ?> </td>
          <td><?php echo $byr["Nama Buyer"]; ?> </td>
          <td><?php echo $byr["Alamat"]; ?> </td>
        </tr>
        <?php endforeach; ?> 

    </div>
</body>
</html>
