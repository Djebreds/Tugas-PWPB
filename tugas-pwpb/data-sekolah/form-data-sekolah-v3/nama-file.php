<?php
require 'database.php';
// melakukkan penambahan data menggunakan insert kedalam tabel sekolah_data
    $error = false;
    $message = "";
if (isset($_POST['save'])) {
    $nis = htmlspecialchars($_POST['nis']);
    $nama = htmlspecialchars($_POST['nama_siswa']);
    $alamat = htmlspecialchars($_POST['alamat_siswa']);
    $kelamin = $_POST['jenis_kelamin'];
    
    // melakukan pemanggilan function bulan
    $bulan = bulan($_POST['bulan']);
    $lahir = $_POST['tanggal'] . " - " . $bulan . " - " . $_POST['tahun'];

    // melakukan validasi NIS
    if (!preg_match('/^[0-9]*$/', $nis)) {
        $error = true;
        $message = "<p align='center' style='color: red'>NIS yang anda masukkan tidak valid!</p>";
        
    } else {
        // cek jika nis sudah terdaftar dalam database
        $cek = mysqli_query($conn, "SELECT nis FROM data_sekolah WHERE nis = $nis");
        if (mysqli_num_rows($cek) === 1) {
            $error = true;
            $message = "<p align='center' style='color: red'>NIS yang anda masukkan sudah terdaftar!</p>";
        } else {
                // melakukan query ke database
            $query = "INSERT INTO data_sekolah VALUES (NULL, '$nis', '$nama', '$alamat', '$kelamin', '$lahir')";
            $result = mysqli_query($conn, $query);

            $error = false;
            header('Location: simpan.php');
            exit();
        }
    }
}
?>>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Tambah Data Sekolah</title>
</head>
<body>
    <h1 align="center"> Tambah Data Sekolah </h1>

    <!-- menampilkan pesan kesalahan -->
    <?php if ($error == true) { ?>
        <?php echo $message ?>
    <?php } ?>


    <form action="" method="POST">
        <table cellpadding="7" cellspacing="3" align="center">
            <tr>
                <td><label for="nis"> NIS </label></td>
                <td><input type="text" name="nis" id="nis" placeholder="111222333" required minlength="9" maxlength="9"></td>
            </tr>
            <tr>
                <td><label for="nama_siswa"> Nama </label></td>
                <td><input type="text" name="nama_siswa" id="nama_siswa" placeholder="nama mu..." required></td>
            </tr>
            <tr>
                <td><label for="alamat_siswa"> Alamat </label></td>
                <td><textarea name="alamat_siswa" id="alamat_siswa" cols="18" rows="7" placeholder="alamat rumah..." required maxlength="255"></textarea></td>
            </tr>
            <tr>
                <td><label for="jenis_kelamin"> Jenis Kelamin </label></td>
                <td>
                    <label for="laki-laki"><input type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki" required> Laki-laki</label>
                    <label for="perempuan"><input type="radio" name="jenis_kelamin" id="perempuan" value="perempuan"> Perempuan</label>
                </td>
            </tr>
            <tr>
                <td><label for="tanggal_lahir">Tanggal Lahir </label></td>
                <td>
                    <select name="tanggal" id="tanggal_lahir" required>
                        <option value="">Tanggal</option>
                        <?php for ($a = 1; $a <= 31; $a++) : ?>
                            <option value="<?= $a ?>"><?= $a ?></option>
                        <?php endfor; ?>
                    </select>
                    <select name="bulan" id="tanggal_lahir" required>
                        <option value="">Bulan</option>
                        <?php for ($a = 1; $a <= 12; $a++) : ?>
                            <option value="<?= $a ?>"><?= $a ?></option>
                        <?php endfor; ?>
                    </select>
                    <select name="tahun" id="tanggal_lahir" required>
                        <option value="">Tahun</option>
                        <?php for ($a = 1995; $a <= 2010; $a++) : ?>
                            <option value="<?= $a ?>"><?= $a ?></option>
                        <?php endfor; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="center"><button type="submit" name="save">Save</button></td>
                <td><button type="button" name="kembali" onclick="history.back();">Kembali</button></td>
            </tr>
        </table>
    </form>
</body>

</html>