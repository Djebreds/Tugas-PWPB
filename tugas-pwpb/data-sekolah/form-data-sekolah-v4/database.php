<?php 

// melakukan koneksi ke database
$conn = mysqli_connect('localhost', 'root', 'root', 'pwpb');

// cek koneksi ke database
if (!$conn) {
    die("Gagal connection ke database" . mysqli_connect_error());
}
// untuk mengubah angka menjadi nama bulan
function bulan($data) {
    switch ($data) {
        case 1 :
            $data = "Januari";
            break;
        case 2 :
            $data = "Februari";
            break;
        case 3 :
            $data = "Maret";
            break;
        case 4 :
            $data = "April";
            break;
        case 5 :
            $data = "Mei";
            break;
        case 6 :
            $data = "Juni";
            break;
        case 7 :
            $data = "Juli";
            break;
        case 8 :
            $data = "Agustus";
            break;
        case 9 :
            $data = "September";
            break;
        case 10 :
            $data = "Oktober";
            break;
        case 11 :
            $data = "November";
            break;
        default :
            $data = "Desember";
            break;
    }
    return $data;
}
