<?php
//gets user details in usertabe
//start session
session_start();

//receive inputs
$userId = 2; //$_SESSION["userId"]; //what user is updating deatils?
$firstName = "Jamie";//$_POST["firstName"];
$lastName = "Stewart";//$_POST["lastName"];
$emailAddress = "j.stewart@email.com";//$_POST["emailAddress"];
$password = "87654321";//$_POST["password"];

//connect to db
include('includes/dbconfig.php');

$stmt = $pdo->prepare("SELECT * FROM `user` WHERE `userId` = '$userId' ");

$stmt->execute();

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
    
    echo($row["firstName"]);//users first name
    echo($row["lastName"]); //users last name
    echo($row["emailAddress"]); //users email address
    echo($row["password"]);//user password
}
?>