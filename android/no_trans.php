<?php
include 'koneksi.php';

$query = mysqli_query($con, "SELECT RIGHT(id_bayar,7) AS kode FROM epasar  ORDER BY id_bayar DESC LIMIT 1");

if (mysqli_num_rows($query) != 0) {
	$kode = null;
	while($row = mysqli_fetch_array($query)){
		$data = $row['kode'];
	}
	$kode = intval($data) + 1;
	// $data = mysqli_fetch_row($query);
	// $kode = intval($data) + 1;
} else {
    $kode = 1;
}
$date = date('ymd');
$kode_max = str_pad($kode, 7,"0",STR_PAD_LEFT);
$kode_jadi = $date.$kode_max;

$response["no_trans"] = array();
if (mysqli_num_rows($query) != 0) {
	$no_trans = array();
	$no_trans['no_urut'] = $kode_jadi;
	array_push($response["no_trans"], $no_trans);

	$response["success"] = 1;

	// echoing JSON response
	echo json_encode($response);
} else {
	$response["success"] = 0;
	$response["message"] = "Tidak ada data toko";

	// echo no users JSON
	echo json_encode($response);
}