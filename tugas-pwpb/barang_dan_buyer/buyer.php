<?php require 'hubung.php'; 

if (isset($_POST['simpan'])) {
    $buyer = $_POST['buyer'];
    $alamat = $_POST['alamat'];
    
    $query = "INSERT INTO Buyer VALUES (NULL, '$buyer', '$alamat')";
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
  <title>Buyer</title>
</head>
<body>
  <h2>Form Buyer</h2>
  
  <form action="" method="POST" >
    <table>
    <tr>
        <td><label for="buyer"> Nama Pembeli: </label></td>
        <td><input type="text" name="buyer" id="buyer" required></td>
    </tr>
    <tr>
        <td><label for="alamat"> Alamat: </label></td>
        <td><input type="text" name="alamat" id="alamat" required></td>
     </tr>
     <tr>
        <td><button type="submit" name="simpan">Simpan</button></td>
     </tr>
     </table>
  </form>

</body>
</html>