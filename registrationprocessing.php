<?php
//process-signup.php

//receive input
include "navheader.html";
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
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/processing-pages.css">
</head>
<body>

	<div class="process-form">
		<p>Thank you for signing up!</p>
		<a href="sign-in.php">Go to Login</a>
	</div>

</body>
</html>
