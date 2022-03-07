<?php 
require 'database.php';
// menampilkan semua isi data didalam database
$query = "SELECT * FROM data_sekolah";
$data = mysqli_query($conn, $query);

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
    <h1 align='center'> Data Sekolah </h1>
    <br>
    <center>
        <a href="nama-file.php">Tambah Data</a>
    </center>
    <br>
    <table cellpadding="10" cellspacing="1" border="1" align="center">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
        </tr>
        <?php $a = 1 ?>
        <?php foreach($data as $dta) : ?>
        <tr>
            <td><?php echo $a ?></td>
            <td><?php echo $dta['nis'] ?></td>
            <td><?php echo $dta['nama_siswa'] ?></td>
            <td><?php echo $dta['alamat_siswa'] ?></td>
            <td><?php echo $dta['jenis_kelamin'] ?></td>
            <td><?php echo $dta['tanggal_lahir'] ?></td>
        </tr>
        <?php $a++ ?>
        <?php endforeach; ?>
    </table>
</body>
</html>