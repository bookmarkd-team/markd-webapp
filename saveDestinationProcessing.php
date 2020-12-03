<?php
//inserts into a save table. "As a user I want to save a destination I see on the application"
//start session
session_start();

//receive inputs
$userId = 1; //$_SESSION["userId"]; //what user is saving?
$destinationId= 2; //destinationId= $_POST[];// what destination is beign saved

//connect to db
include('includes/dbconfig.php');

$stmt = $pdo->prepare("INSERT INTO `save`(`saveId`, `userId`, `destinationId`) VALUES ( NULL,'$userId','$destinationId');");

$stmt->execute();
?>