<?php
 

/*
 * Berikut adalah kelas untuk meng-update data mahasiswa
 */
include 'koneksi.php';

// array for JSON response
$response = array();
 
// check for required fields

 
//$fromClass = $_POST['asal'];
$bayar = $_POST['bayar'];

$query =mysqli_query($con, "UPDATE setting_bayar SET jumlah_bayar='$bayar' WHERE id_bayar='sekarang'");

// check if row inserted or not
if ($query) {
    echo "Jumlah Bayar Berhasil Disimpan";
} else {
    echo "Jumlah Bayar Gagal Disimpan";
}
?>