<?php
  /*
   Author : www.theheran.com | info@theheran.com
   PIN BBM: 571078A7
  */
  include("koneksi.php");

  if(isset($_GET['mode'])){

    //cek nilai dari mode
    if($_GET['mode'] == "getDataLokasi"){

        $query="SELECT * FROM lokasi";

        $result=mysqli_query($con, $query);
        $rows=array();
        $maxRow = mysqli_num_rows($result);
        while($row = mysqli_fetch_assoc($result)){
          $rows[]=$row;
        }
        
        if($maxRow>0){
          //convert response to JSON format
          $data ="{values: ".json_encode($rows)."}";
          echo $data;
        }else{
          echo "nodata";
        }
    }
  }
    
?>