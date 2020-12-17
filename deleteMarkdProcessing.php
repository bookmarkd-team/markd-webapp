<?php
session_start();

//process-delete-person.php

//receive POST data from delete form
$destinationId = $_POST["destinationId"];
$userId=$_POST["userId"]; 


//delete person record (row)
include('includes/dbconfig.php');

$stmt = $pdo->prepare("DELETE FROM `save`
	WHERE `destinationId`='$destinationId'AND `userId` = $userId;");

$stmt->execute();
echo"success"; 

?>