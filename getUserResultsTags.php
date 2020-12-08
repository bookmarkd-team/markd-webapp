<?php
//start session
session_start();

//receive inputs
$userId = 1; //$_SESSION["userId"]; //what user's answers do we need

//connect to db
include('includes/dbconfig.php');

$stmt = $pdo->prepare("SELECT * FROM `questionansweruser` WHERE `userId` = '$userId'");

$stmt->execute();

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo($row["answerId"]); //the id of the answer, probably will not use
    echo($row["questionId"]);//the question Id
    echo($row["userId"]); //user id
    echo($row["answer"]); // answer as a string
    echo($row["created_at"]);//time user answered the question
}

?>
