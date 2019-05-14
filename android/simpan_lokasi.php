<?php
 

/*
 * Berikut adalah kelas untuk meng-update data mahasiswa
 */
include 'koneksi.php';

// array for JSON response
$response = array();
 
// check for required fields

 
//$fromClass = $_POST['asal'];
$lokasi = $_POST['lokasi'];

$query =mysqli_query($con, "UPDATE setting_lokasi SET nama_lokasi='$lokasi' WHERE id_lokasi='sekarang'");

// check if row inserted or not
if ($query) {
    echo "Lokasi Berhasil Disimpan";
} else {
    echo "Lokasi Gagal Disimpan";
}
?>