<?php
session_start();
if ($_SESSION["userId"]){
//process-delete-person.php

//receive POST data from delete form
$saveId = $_POST["saveId"];

//delete person record (row)
include('includes/dbconfig.php');

$stmt = $pdo->prepare("DELETE FROM `saved`
	WHERE `saved`.`saveId` = $saveId;");

$stmt->execute();

}
?>