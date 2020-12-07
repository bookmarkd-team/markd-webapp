<?php
//start session
session_start();

//receive inputs
$userId = $_SESSION["userId"];
$answer = $_POST["answer"];
$answer2 = $_POST["answer2"];
$answer3 = $_POST["answer3"];
$answer4 = $_POST["answer4"];

//connect to db
include('includes/dbconfig.php');

$stmt = $pdo->prepare("INSERT INTO `questionansweruser`
(`answerId`, `userId`,  `answer`, `answer2`, `answer3`, `answer4`, `created_at`)
VALUES (NULL, '$userId', '$answer', '$answer2', '$answer3', '$answer4', NULL);");

$stmt->execute();
?>
