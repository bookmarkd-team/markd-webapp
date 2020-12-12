<?php
//inserts into a save table. "As a user I want to save a destination I see on the application"

//receive inputs
$userId = $_POST["userId"]; //what user is saving?
$destinationId= $_POST["destinationId"];// what destination is beign saved

//connect to db
include('includes/dbconfig.php');

$stmt = $pdo->prepare("INSERT INTO `save`(`saveId`, `userId`, `destinationId`) VALUES ( NULL,'$userId','$destinationId');");

$stmt->execute();
?>