<?php
require 'database.php';

$error = false;
$message = "";

// melakukan penambahan data ke dalam database ortu
if (isset($_POST['simpan'])) {
    $nama_ortu = htmlspecialchars($_POST['nama_ortu']);
    $pekerjaan = ($_POST['pekerjaan']);
    $no_hp = $_POST['no_hp'];
    $alamat = htmlspecialchars($_POST['alamat_ortu']);
    
    // cek validasi nomor_hp 
    if (preg_match('/^[0-9]*$/', $no_hp)) {
        $error = false;
        $query = "INSERT INTO orang_tua VALUES (NULL, '$nama_ortu', '$pekerjaan', '$no_hp', '$alamat')";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        header('Location: simpan.php');    
    } else {
        $error = true;
        $message = "<p align='center' style='color: red;' >nomor handphone tidak valid!</p>";
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Orang Tua Siswa</title>
</head>
<body>
    <h1 align="center">Data Orang Tua Siswa</h1>
    <!-- Menampilkan pesan kesalahan -->
    <?php if ($error == true) { ?>
        <?php echo $message ?>
    <?php } ?>

    <form action="" method="POST">
        <table cellpadding="7" cellspacing="3" align="center">
            <tr>
                <td><label for="nama_ortu"> Nama Orang Tua </label></td>
                <td><input type="text" name="nama_ortu" id="nama_ortu" placeholder="nama orang tua..." required></td>
            </tr>
            <tr>
                <td><label for="pekerjaan"> Pekerjaan </label></td>
                <td>
                    <select name="pekerjaan" id="pekerjaan" required>
                        <option value="">-- Pekerjaan --</option>
                        <option value="pns">PNS</option>
                        <option value="polisi">POLISI</option>
                        <option value="tni">TNI</option>
                        <option value="warausaha">WIRAUSAHA</option>
                        <option value="buruh">BURUH</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="no_hp"> Nomor HP </label></td>
                <td><input type="text" name="no_hp" placeholder="08*********" required minlength="11" maxlength="13"></td>
            </tr>
            <tr>
                <td><label for="alamat_ortu">Alamat Orang Tua</label></td>
                <td>
                    <textarea name="alamat_ortu" id="alamat_ortu" cols="18" rows="7" required placeholder="alamat rumah"></textarea>
                </td>
            </tr>
            <tr>
                <td><button type="submit" name="simpan">Simpan</button></td>
                <td><button type="button" name="back" onclick="history.back()">Kembali</button></td>
            </tr>
        </table>
    </form>
</body>

</html>