<?php
session_start();
session_destroy();

setcookie ( "name", "", time () - 7 ); 

$URL="index.php"; 
header("Location: $URL");
?>
