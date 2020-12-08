<?php
//process-signup.php

//receive input
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$emailAddress = $_POST["emailAddress"];
$password = $_POST["password"];

//this part adds a new user to the 'user' table
include('includes/dbconfig.php');

$stmt = $pdo->prepare("INSERT INTO `user`
	(`userId`, `firstName`, `lastName`, `emailAddress`, `password`, `created_at`)
	VALUES (NULL, '$firstName', '$lastName', '$emailAddress', '$password', NULL);");

$stmt->execute();
?>
<p>Thank you for signing up!</p>
<a href="sign-in.php">Go to Login</a>
