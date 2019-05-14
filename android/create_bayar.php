<?php
 
/*
 * Berikut adalah kelas untuk menambah data mahasiswa
 */
 
// array for JSON response
include 'koneksi.php';

$response = array();

$id         = $_POST['no_trans'];
$nama       = $_POST['nama_lokasi'];
$jml        = $_POST['bayar'];
//$petugas    = $_POST['pemungut'];
$tgl_bayar  = $_POST['tgl_bayar'];

// include db connect class
 
// mysql inserting a new row
$sql = "INSERT INTO epasar(id_bayar,nama_lokasi,jml_setor,dibayar_pada) VALUES('$id','$nama','$jml','$tgl_bayar')";
$result = mysqli_query($con, $sql);

// check if row inserted or not
if ($result) {
    echo "Data Berhasil Ditambahkan";
} else {
    echo "Data Gagal Ditambahkan";
}
?>