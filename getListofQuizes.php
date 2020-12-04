<?php
//call to get a list of quizes on the platform
//start session
session_start();

include('includes/dbconfig.php');
//GET quiz for quizId==1

//receive input
//no input


$stmt = $pdo->prepare("SELECT * FROM `quiz`");

$stmt->execute();

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
    echo($row["quizId"]);
    echo($row["quizName"]);
}
?>