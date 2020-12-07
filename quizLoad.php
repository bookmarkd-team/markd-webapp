<?php
//start session
session_start();
include "navheader.html";
include('includes/dbconfig.php');
//GET quiz for quizId==1

//receive input
$quizId = 1;
//$quizId = $_POST["quizId"]; //may change to GET. check on


$stmt = $pdo->prepare("SELECT * FROM `quizquestion`
WHERE `quizId` = '$quizId'");

$stmt->execute();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Mark'd - Discover Your Endless Experiences</title>
    <meta charset="utf-8">
    <meta name="description" content="travel experiences generator">
    <meta name="keywords" content="travel, marking, planning, experiences, discovery">
    <link rel="author" content="Mark'd Team" href="https://sheridancollege.ca" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' type="image/png" sizes="32x32" href='icon/favicon.png'>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/quiz.css">
</head>

    <h1>Question:</h1>
<?php
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo("<div class='question1'>");?>
    <p id="questionString"><?php echo($row["questionString"]);?></p></br>

<?php
    echo("<div class='results1'>");
    echo($row["resultOption1"]);
    echo("</div>");

    echo("<div class='results2'>");
    echo($row["resultOption2"]);
    echo("</div>");

    echo("</div>");
}
?>
</body>
</html>
