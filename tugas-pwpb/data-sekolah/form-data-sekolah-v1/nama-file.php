<?php
require 'database.php';

if (isset($_POST['save'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama_siswa'];
    $alamat = $_POST['alamat_siswa'];
    $kelamin = $_POST['jenis_kelamin'];

    $query = "INSERT INTO data_sekolah VALUES (NULL, $nis, '$nama', '$alamat', '$kelamin', '-')";
    $result = mysqli_query($conn, $query);
    header('Location: simpan.php');
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Data Sekolah</title>
</head>
<body>
    <h1 align="center">Data Sekolah</h1>
    <form action="" method="POST">
        <table cellpadding="7" cellspacing="3" align="center">
            <tr>
                <td><label for="nis"> NIS  </label></td>
                <td><input type="text" name="nis" id="nis" placeholder="111222333" required minlength="9" maxlength="9"></td>
            </tr>
            <tr>
                <td><label for="nama_siswa"> Nama  </label></td>
                <td><input type="text" name="nama_siswa" id="nama_siswa" placeholder="nama mu..." required></td>
            </tr>
            <tr>
                <td><label for="alamat_siswa"> Alamat  </label></td>
                <td><textarea name="alamat_siswa" id="alamat_siswa" cols="18" rows="7" placeholder="alamat rumah..." required maxlength="200"></textarea></td>
            </tr>
            <tr>
                <td><label for="jenis_kelamin"> Jenis Kelamin </label></td>
                <td> 
                    <label for="laki-laki"><input type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki" required> Laki-laki</label>
                    <label for="perempuan"><input type="radio" name="jenis_kelamin" id="perempuan" value="perempuan"> Perempuan</label>
                </td>
            </tr>
            </tr>
            <tr>
                <td align="center"><button type="submit" name="save">Save</button></td>
                <td><button type="button" name="back" onclick="history.back()">Kembali</button></td>
            </tr>
       </table>
    </form>
</body>
</html>


