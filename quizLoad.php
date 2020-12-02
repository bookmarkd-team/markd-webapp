<?php
include('includes/dbconfig.php');
//GET quiz for quizId==1

$stmt = $pdo->prepare("SELECT * FROM `quizquestion`
WHERE `quizId` = '1'");

$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>