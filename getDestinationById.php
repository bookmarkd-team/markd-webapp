<?php 

//start session
session_start();

$destinationId = $_GET["destinationId"];

include("includes/dbconfig.php");

$stmt = $pdo->prepare("SELECT * FROM `destination`
WHERE `destinationId` = '$destinationId'");

$stmt->execute();

$row = $stmt->fetch(PDO:: FETCH_ASSOC);
    echo ($row["imageLink"]);  //<<needs to be set into img tag

    //destination info
    echo ($row["destinationName"]);
    echo ($row["destinationDescription"]);
    echo ($row["city"]);
    echo ($row["country"]);


?>