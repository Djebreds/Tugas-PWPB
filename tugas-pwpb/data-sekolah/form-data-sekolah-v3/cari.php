<?php
require "database.php";

if (isset($_POST['show'])) {
    header('Location: simpan.php');
    exit();
}
    $error = false;
    $message = "";
// melakukan pencarian data menggunakan NIS
if (isset($_POST['search'])) {
    $cari = htmlspecialchars($_POST['cari']);
    $error = false;
    $message = "";
    // melakukan query data berdasarkan NIS
    $data = mysqli_query($conn, "SELECT * FROM data_sekolah WHERE nis LIKE '$cari'") or die(mysqli_error($conn));
    
    if ($_POST['search'] || mysqli_num_rows($data) > 0) { 
        $error = true;
    } else {
        $error = false;
        $message = "<p align='center' style='color: red'>NIS yang anda cari tidak ditemukan!</p>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, iitial-scale=1.0">
    <title>Cari</title>
</head>
<body>
    <h1 align="center">
        Cari Data Sekolah
    </h1>
    <form action="" method="POST" align="center">
        <label for="cari"> Search </label>
        <input type="text" name="cari" id="cari" maxlength="9" placeholder="searching...">
        <button type="submit" name="search">Search</button>
        <button type="submit" name="show">Show All</button>
    </form>

    <!-- menampilkan pesan jika data tidak ditemukan -->
    <?php if ($error == false) { ?>
        <?php echo $message ?>

    <?php } ?>

    <?php if ($error == true) { ?>
        <!-- cek jika data ditemukan -->
        <br>
        <table cellpadding="10" cellspacing="1" border="1" align="center">
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Aksi</th>
            </tr>
            <!-- menampilkan 1 record dari tabel sekolah_data -->
            <?php $d = mysqli_fetch_array($data) ?>
            <tr>
                <td><?php echo $d['id_siswa'] ?></td>
                <td><?php echo $d['nis'] ?></td>
                <td><?php echo $d['nama_siswa'] ?></td>
                <td><?php echo $d['alamat_siswa'] ?></td>
                <td><?php echo $d['jenis_kelamin'] ?></td>
                <td><?php echo $d['tanggal_lahir'] ?></td>
                <td><a href="edit.php?nis=<?= $d['nis'] ?>">Edit</a></td>
            </tr>
        </table>
    <?php } ?>
</body>

</html>