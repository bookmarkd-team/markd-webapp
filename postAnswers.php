<?php
//start session
session_start();

//receive inputs
$userId = $_SESSION["userId"];
$questionId= $_POST["questionId"];
$answer= $_POST["answer"];

//connect to db
include('includes/dbconfig.php');

$stmt = $pdo->prepare("INSERT INTO `questionansweruser` 
(`answerId`, `questionId`, `userId`,  `answer`, `created_at`) 
VALUES (NULL, '$questionId', '$userId', '$answer', NULL);");

$stmt->execute();
?>