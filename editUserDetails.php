<?php
//updates user details in user table 
//start session
session_start();

//receive inputs chaneg string belowe to POST variables
$userId = 2; //$_SESSION["userId"]; //what user is updating deatils?
$firstName = "Jamie";//$_POST["firstName"];
$lastName = "Stewart";//$_POST["lastName"];
$emailAddress = "j.stewart@email.com";//$_POST["emailAddress"];
$password = "87654321";//$_POST["password"];

//connect to db
include('includes/dbconfig.php');

$stmt = $pdo->prepare("UPDATE `user` SET `firstName`= '$firstName',`lastName`= '$lastName',`emailAddress`= '$emailAddress',`password`= '$password' WHERE `userId` = '$userId' ");

$stmt->execute();
?>