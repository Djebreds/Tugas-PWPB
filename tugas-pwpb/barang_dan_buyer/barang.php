<?php 
require 'hubung.php'; 
if (isset($_POST['simpan'])) {
    $barang = $_POST['barang'];
    $harga = $_POST['harga'];
    
    $query = "INSERT INTO Barang VALUES (NULL, '$barang', '$harga')";
    mysqli_query($connect, $query);
    header('Location: simpan.php');
    exit();
  }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Barang</title>
</head>
<body>
  <h2>Form Barang</h2>

  <form action="" method="POST" >
    <table>
      <tr>
        <td><label for="barang"> Nama Barang: </label></td>
        <td><input type="text" name="barang"' id="barang" required></td>
     </tr>
     <tr>
        <td><label for="harga"> Harga: </label></td> 
        <td><input type="text" name="harga" id="harga" required></td> 
     </tr>
     <tr>
        <td><button type="submit" name="simpan">Simpan</button></td>
     </tr>
     </table>
  </form>
  
</body>
</html>