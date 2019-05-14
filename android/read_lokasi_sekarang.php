<?php

/*
 * Berikut adalah kelas untuk membaca data mahasiswa
 */

// array for JSON response
$response = array();
 
// include db connect class
include 'koneksi.php';

 
// connecting to db
//$db = new DB_CONNECT();

 
$sql = "SELECT * FROM setting_lokasi";
$mhs_result = mysqli_query ($con, $sql); //run the query
 
 // check for empty result
 if (mysqli_num_rows($mhs_result) > 0) {

  $response["lokasi"] = array();
 
  while ($row = mysqli_fetch_array($mhs_result)) {
   // temp user array
   $epasar = array();
   $epasar["id_lokasi"]  = $row["id_lokasi"];
   $epasar["nama_lokasi"]    = $row["nama_lokasi"];
 
   // push single puasa into final response array
   array_push($response["lokasi"], $epasar);
  }
  // success
  $response["success"] = 1;
 
  // echoing JSON response
  echo json_encode($response);
 } else {
  $response["success"] = 0;
  $response["message"] = "Tidak ada data mahasiswa";
 
  // echo no users JSON
  echo json_encode($response);
 }
?>