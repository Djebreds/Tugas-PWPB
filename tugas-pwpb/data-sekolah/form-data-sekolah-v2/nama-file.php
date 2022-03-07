<?php
require 'database.php';

    if (isset($_POST['save'])) {
        $nis = $_POST['nis'];
        $nama = $_POST['nama_siswa'];
        $alamat = $_POST['alamat_siswa'];
        $kelamin = $_POST['jenis_kelamin'];
        $bulan = $_POST['bulan'];
        // mengubah angka menjadi nama bulan
        switch ($bulan) {
            case 1 :
                $bulan = "Januari";
                break;
            case 2 :
                $bulan = "Februari";
                break;
            case 3 :
                $bulan = "Maret";
                break;
            case 4 :
                $bulan = "April";
                break;
            case 5 :
                $bulan = "Mei";
                break;
            case 6 :
                $bulan = "Juni";
                break;
            case 7 :
                $bulan = "Juli";
                break;
            case 8 :
                $bulan = "Agustus";
                break;
            case 9 :
                $bulan = "September";
                break;
            case 10 :
                $bulan = "Oktober";
                break;
            case 11 :
                $bulan = "November";
                break;
            default :
                $bulan = "Desember";
                break;
        }

        $lahir = $_POST['tanggal'] . " - " . $bulan . " - " . $_POST['tahun'];
        $query = "INSERT INTO data_sekolah (nis, nama_siswa, alamat_siswa, jenis_kelamin, tanggal_lahir) VALUES ('$nis', '$nama', '$alamat', '$kelamin', '$lahir')";
        mysqli_query($conn, $query);
        header('Location: simpan.php');
        exit();
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
    <h1 align='center'>Data Sekolah</h1>
    <form action="" method="POST" >
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
                <td><label for="tanggal_lahir">Tanggal Lahir :</label></td>
                <td>
                <select name="tanggal" id="tanggal_lahir" required>
                    <option value="">Tanggal</option>
                    <?php for($a = 1; $a <= 31; $a++) : ?>
                        <option value="<?= $a ?>"><?= $a ?></option>    
                    <?php endfor; ?>
                </select>
                <select name="bulan" id="tanggal_lahir" required>
                    <option value="">Bulan</option>
                    <?php for($a = 1; $a <= 12; $a++) : ?>
                         <option value="<?= $a ?>"><?= $a ?></option>
                    <?php endfor; ?>
                </select>
                <select name="tahun" id="tanggal_lahir" required>
                    <option value="">Tahun</option>
                    <?php for($a = 1990; $a <= 2010; $a++) : ?>
                        <option value="<?= $a ?>" ><?= $a ?></option>    
                    <?php endfor; ?>
                </select>
                </td>
            </tr>
            <tr>
                <td align="center"><button type="submit" name="save">Save</button></td>
                <td><button type="button" name="back" onclick="history.back()">Kembali</button></td>
            </tr>
       </table>
    </form>
</body>
</html>


