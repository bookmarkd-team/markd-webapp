<?php
//gets the destinations a user has saved.
//start session
session_start();

//receive inputs
$userId = $_GET["userId"]; //who's saved list am I looking for?
$destinationId = $_GET["destinationId"]; //who's saved list am I looking for?

//connect to db
include('includes/dbconfig.php');

$stmt = $pdo->prepare("SELECT COUNT(`destinationId`) FROM `save` WHERE `destinationId` = '$destinationId' AND `userId` = '$userId' ");

$stmt->execute();

return $stmt;


?>