<?php
$response = array();
 
include 'koneksi.php';

 
$sql = "SELECT * FROM epasar ORDER BY id_bayar DESC LIMIT 1";
$print_result = mysqli_query ($con, $sql); //run the query
 
 if (mysqli_num_rows($print_result) > 0) {

  $response["print"] = array();
 
  while ($row = mysqli_fetch_array($print_result)) {
   $print = array();
   $print["id_bayar"]   = $row["id_bayar"];
   $print["nama"]       = $row["nama_lokasi"];
   $print["jml_setor"]  = $row["jml_setor"];
   $print["dibayar"]    = $row["dibayar_pada"];
   array_push($response["print"], $print);
  }
  // success
  $response["success"] = 1;
 
  echo json_encode($response);
 } else {
  $response["success"] = 0;
  $response["message"] = "Tidak ada data mahasiswa";
 
  echo json_encode($response);
 }
?>