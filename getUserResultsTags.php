<?php
//start session
session_start();

//receive inputs
$userId = 1; //$_SESSION["userId"]; //what user's answers do we need

//connect to db
include('includes/dbconfig.php');

$stmtLoadUserResults = $pdo->prepare("SELECT * FROM `questionansweruser` WHERE `userId` = '$userId'");

$stmtLoadUserResults->execute();

// while($results = $stmtLoadUserResults->fetch(PDO::FETCH_ASSOC)) {  
//     echo($results["answer"]); // answer as a string
    
// }

$userTags= array();

while($results = $stmtLoadUserResults->fetch(PDO::FETCH_ASSOC)) {  
    //echo($results["answer"]); // answer as a string

    //add item to an array
    array_push($userTags,$results["answer"]);
    
}

//print_r($userTags);

$tagsJSON = json_encode($userTags);
//echo ($tagsJSON);


?>