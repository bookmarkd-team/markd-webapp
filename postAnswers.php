<?php
//start session
session_start();

//receive inputs
$userId = 1; //$_SESSION["userId"];
$questionId= 2; //questionId= $_POST[];
$answer= "chill"; //answer= $_POST["answer"];

//connect to db
include('includes/dbconfig.php');

$stmt = $pdo->prepare("INSERT INTO `questionansweruser` 
(`answerId`, `questionId`, `userId`,  `answer`, `created_at`) 
VALUES (NULL, '$questionId', '$userId', '$answer', NULL);");

$stmt->execute();
?>