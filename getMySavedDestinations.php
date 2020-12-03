<?php
//gets the destinations a user has saved.
//start session
session_start();

//receive inputs
$userId = 1; //$_SESSION["userId"]; //who's saved list am I looking for?

//connect to db
include('includes/dbconfig.php');

$stmt = $pdo->prepare("SELECT `destinationId` FROM `save` WHERE `userId` = '$userId' ");

$stmt->execute();

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
    echo($row["destinationId"]); //list all the destinations that the selected user has lined
}
?>