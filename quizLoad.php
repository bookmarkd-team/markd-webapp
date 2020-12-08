<?php
//start session
session_start();

include('includes/dbconfig.php');
//GET quiz for quizId==1

//receive input
$quizId = 1; //Had code to pull questions for quiz 1) 
//$quizId = $_SESSION["quizId"]; //may change to GET. check on


$stmtQuizLoad = $pdo->prepare("SELECT * FROM `quizquestion`
WHERE `quizId` = '$quizId'");

$stmtQuizLoad->execute();


////While loop to test echo that thie select statment is working
// while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
//     echo($row["questionId"]);
//     echo($row["quizId"]);
//     echo($row["questionString"]);
//     echo($row["resultOption1"]);
//     echo($row["resultOption2"]);
// }
?>