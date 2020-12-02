<?php
//start session
session_start();

include('includes/dbconfig.php');
//GET quiz for quizId==1

//receive input
$quizId = 1;
//$quizId = $_POST["quizId"]; //may change to GET. check on


$stmt = $pdo->prepare("SELECT * FROM `quizquestion`
WHERE `quizId` = '$quizId'");

$stmt->execute();

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
    echo($row["questionId"]);
    echo($row["quizId"]);
    echo($row["questionString"]);
    echo($row["resultOption1"]);
    echo($row["resultOption2"]);
}
?>