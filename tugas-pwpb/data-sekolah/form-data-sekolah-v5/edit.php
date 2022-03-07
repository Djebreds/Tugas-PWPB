<?php
require 'database.php';
// mendapatkan nis dari setiap data
$nis = $_GET['nis'];

if (isset($_POST['edit'])) {
    $nis = htmlspecialchars($_POST['nis']);
    $nama = htmlspecialchars($_POST['nama_siswa']);
    $alamat = htmlspecialchars($_POST['alamat_siswa']);
    $kelamin = $_POST['jenis_kelamin'];
    
    // melakukan pemanggilan function bulan
    $bulan = bulan($_POST['bulan']);
    $lahir = $_POST['tanggal'] . " - " . $bulan . " - " . $_POST['tahun'];

    // melakukan query ke dalam database
    $query = "UPDATE data_sekolah SET nama_siswa = '$nama', alamat_siswa = '$alamat', jenis_kelamin = '$kelamin', tanggal_lahir = '$lahir' WHERE nis = $nis";
    $result = mysqli_query($conn, $query);
    header('Location: simpan.php');
    exit();
}

// menampilkan semua data dari tabel lewat NIS
$sql = "SELECT * FROM data_sekolah WHERE nis = $nis";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($query);

// melakukan pemisahan string
$tanggal_lahir = $data['tanggal_lahir'];
$tl = explode(" - ", $tanggal_lahir);

// melakukan pergantian nilai
switch ($tl[1]) {
    case "Januari":
        $tl[1] = 1;
        break;
    case "Februari":
        $tl[1] = 2;
        break;
    case "Maret":
        $tl[1] = 3;
        break;
    case "April":
        $tl[1] = 4;
        break;
    case "Mei":
        $tl[1] = 5;
        break;
    case "Juni":
        $tl[1] = 6;
        break;
    case "Juli":
        $tl[1] = 7;
        break;
    case "Agustus":
        $tl[1] = 8;
        break;
    case "September":
        $tl[1] = 9;
        break;
    case "Oktober":
        $tl[1] = 10;
        break;
    case "November":
        $tl[1] = 11;
        break;
    default:
        $tl[1] = 12;
        break;
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h1 align="center">Edit Data Sekolah</h1>
    <form action="" method="POST">
    <input type="hidden" name="id_siswa" value="<?php echo $data["id_siswa"] ?>">
        <table cellpadding="7" cellspacing="3" align="center">
            <tr>
                <td><label for="nis"> NIS </label></td>
                <td><input type="text" name="nis" id="nis" required minlength="9" maxlength="9" value="<?php echo $data["nis"] ?>" readonly></td>
            </tr>
            <tr>
                <td><label for="nama_siswa"> Nama </label></td>
                <td><input type="text" name="nama_siswa" id="nama_siswa" placeholder="nama mu..." required value="<?php echo $data["nama_siswa"] ?>"></td>
            </tr>
            <tr>
                <td><label for="alamat_siswa"> Alamat </label></td>
                <td><textarea name="alamat_siswa" id="alamat_siswa" cols="18" rows="7" placeholder="alamat rumah..." required maxlength="255"><?php echo $data["alamat_siswa"] ?></textarea></td>
            </tr>
            <tr>
                <td><label for="jenis_kelamin"> Jenis Kelamin </label></td>
                <td>
                    <label for="laki-laki">
                        <?php $kelamin = $data["jenis_kelamin"] ?>
                        <input type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki" required <?php echo ($kelamin == "laki-laki") ? 'checked' : "" ?>> Laki-laki
                    </label>
                    <label for="perempuan">
                        <input type="radio" name="jenis_kelamin" id="perempuan" value="perempuan" <?php echo ($kelamin == "perempuan") ? 'checked' : "" ?>> Perempuan
                    </label>
                </td>
            </tr>
            <tr>
                <td><label for="tanggal_lahir">Tanggal Lahir </label></td>
                <td>
                    <select name="tanggal" id="tanggal_lahir" required>
                        <option value="">Tanggal</option>
                        <?php for ($a = 1; $a <= 31; $a++) : ?>
                            <option <?php echo ($tl[0] == $a) ? "selected" : "" ?>><?= $a ?></option>
                        <?php endfor; ?>
                    </select>
                    <select name="bulan" id="tanggal_lahir" required>
                        <option value="">Bulan</option>
                        <?php $bulan = $_POST['bulan'] ?>
                        <?php for ($a = 1; $a <= 12; $a++) : ?>
                            <option <?php echo ($tl[1] == $a) ? "selected" : "" ?>><?= $a ?></option>
                        <?php endfor; ?>
                    </select>
                    <select name="tahun" id="tanggal_lahir" required>
                        <option value="">Tahun</option>
                        <?php $tahun = $_POST['tahun'] ?>
                        <?php for ($a = 1990; $a <= 2010; $a++) : ?>
                            <option <?php echo ($tl[2] == $a) ? "selected" : "" ?>><?= $a ?></option>
                        <?php endfor; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="center"><button type="submit" name="edit">Edit</button></td>
                <td><button type="button" name="kembali" onclick="history.back();">Kembali</button></td>
            </tr>
        </table>
    </form>

</body>

</html>