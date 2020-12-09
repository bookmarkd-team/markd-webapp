<?php
include "navheader.php";
session_start();


$userId=$_SESSION["userId"];
$destinationId=$_GET["destinationId"];

$dsn = "mysql:host=localhost;dbname=firstpage;charset=utf8mb4";
$dbusername= "root";
$dbpassword=""; 


$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("SELECT * FROM  `destination` WHERE `destinationId`= $destinationId");
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);     



?>



<!DOCTYPE html>
<html>
<head>
    <title>Mark'd - Discover Your Endless Experiences</title>
    <meta charset="utf-8">
    <meta name="description" content="travel experiences generator">
    <meta name="keywords" content="travel, marking, planning, experiences, discovery">
    <link rel="author" content="Mark'd Team" href="https://sheridancollege.ca" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' type="image/png" sizes="32x32" href='../icon/favicon.png'>
    <link rel="stylesheet" href="css/navbar.css"> 
    
</head>

<body>
<div id="heading"> 
<h1>
Tokyo, Japan</br>
Shopping District 
</h1> 

<button type="submit" id="mark">Mark it</button>
</div> 

<img src=""  alt="destination image error" width="auto" height="auto">





 




</body>

</html>