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

 
$sql = "SELECT * FROM setting_bayar";
$result = mysqli_query ($con, $sql); //run the query
 
 // check for empty result
 if (mysqli_num_rows($result) > 0) {

  $response["bayar"] = array();
 
  while ($row = mysqli_fetch_array($result)) {
   // temp user array
   $epasar = array();
   $epasar["id_bayar"]  = $row["id_bayar"];
   $epasar["jml_bayar"] = $row["jumlah_bayar"];
 
   // push single puasa into final response array
   array_push($response["bayar"], $epasar);
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