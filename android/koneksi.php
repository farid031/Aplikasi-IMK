<?php
define('DB_USER', "epasar"); // db user
define('DB_PASSWORD', "epasar321"); // db password
define('DB_DATABASE', "db_ePasar"); // database name
define('DB_SERVER', "localhost"); // db server

$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE) or die('Unable to connect');
?>