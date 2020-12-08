<?php
//start session
session_start();
//processing the login

//receive input
$emailAddress = $_POST["emailAddress"];
$password = $_POST["password"];


include('includes/dbconfig.php');


$stmt = $pdo->prepare("SELECT * FROM `user`
WHERE `emailAddress` = '$emailAddress' AND `password` = '$password'");

$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    //session declarations
    $_SESSION["userId"] = $row["userId"];
	//successful login
	?><p>Welcome! Take the Travel Quiz</p> <!-- UPDATED for demo run, change back to "Welcome Back" after Tuesday -->
	<a href="quiz.php">Go to Travel Quiz</a><?php

}else{
	//incorrect input
	?><p>Incorrect username/password. Please Try Again.</p>
	<a href = "login.php">Back to Login</a><?php
}
?>
