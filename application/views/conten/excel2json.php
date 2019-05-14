<?php
//  Importing required files
include 'C:/xampp/htdocs/aplikasi-imk/application/libraries/config/util.php';
include 'C:/xampp/htdocs/aplikasi-imk/application/libraries/xl_reader.php';

?>
<div id="page-wrapper">
	<div class="row">
	    <div class="col-lg-12">
	        <div class="panel panel-default">
	            <div class="panel-heading">
	                    Data JSON
	            </div>
	            <div class="panel-body" style="font-size: 16px;">
	            <?php
					//  Opens a excel file for reading
					$excelData = openFile('Book1.xlsx');

					//  Data easy access
					extract($excelData);

					//  Generates data in key value pairs
					$keyValueArray = generateKeyValuePairs($keys, $rows);

					//  Outputs data in required format
					//displayResponse('success', 'Excel Data in json format', $keyValueArray);
					echo json_encode($keyValueArray); 
				?>
	            </div>
	        </div>
	    </div>
	</div>
</div>