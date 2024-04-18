<?php
session_start();
session_destroy();

setcookie ( "name", "", time () - 60*60*24*7 ); 

$URL="index.php"; 
header("Location: $URL");
?>
