<?php 
//db-config.php
$dsn = "mysql:host=localhost;dbname=markdapp;charset=utf8mb4";

$dbusername = "root";
$dbpassword = "";
$pdo = new PDO($dsn, $dbusername, $dbpassword); 

?>