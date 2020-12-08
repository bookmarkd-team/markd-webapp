<?php
//gets a list of destinations based on the tagName or " " to return all the destinations or if developer forgets to send a tag
//start session
session_start();

//receive inputs
$tagName = "";
 //$_POST["tagName"]; //which tag do I need destinations for?

//connect to db
include('includes/dbconfig.php');

if ($tagName != null) {

    $stmt = $pdo->prepare("SELECT `destinationId`, `destinationName`, `destinationDescription`, `city`, `country`, `tagName`, `imageLink`, `landingPageFlag`, `created_at` FROM `destination` WHERE `tagName` = '$tagName'");

} else {
    //Run a SQL statement that selects all destinations because no tagName
    $stmt = $pdo->prepare("SELECT * FROM `destination`");

}


$stmt->execute();

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo($row["destinationId"]); //list all the destinations that the selected user has lined
}
?>
