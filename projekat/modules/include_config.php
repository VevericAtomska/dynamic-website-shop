<?php
session_start();

$session_id = session_id();

define("DB_SERVER","localhost");
define("DB_NAME","novav2");
define("DB_USER","root");
define("DB_PASSWORD","");

$connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die("Unable to connect");

?>

