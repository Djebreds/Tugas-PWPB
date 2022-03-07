<?php
require 'database.php';
// menampilkan semua data dari tabel sekolah_data
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
    <h1 align="center"> Data Sekolah </h1>

    <center>
        <a href="nama-file.php">Tambah Data Siswa</a>
    </center>
    <br>
    <center>
        <a href="cari.php">Cari Data</a>
    </center>
    <br>

    <table border="1" cellpadding='7' cellspacing='1' align="center">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>NIS</td>
            <td>Jenis Kelamin</td>
            <td>Tanggal Lahir</td>
            <td>Alamat</td>
        </tr>
        <?php $a = 1; ?>
        <?php foreach ($data as $dta) : ?>
            <tr>
                <td><?php echo $a ?></td>
                <td><?php echo $dta['nis'] ?></td>
                <td><?php echo $dta['nama_siswa'] ?></td>
                <td><?php echo $dta['jenis_kelamin'] ?></td>
                <td><?php echo $dta['tanggal_lahir'] ?></td>
                <td><?php echo $dta['alamat_siswa'] ?></td>
            </tr>
            <?php $a++ ?>
        <?php endforeach ?>
    </table>
</body>

</html>