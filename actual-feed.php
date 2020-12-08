<?php
include "navheader.php";
?>

<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html>
<head>
    <title>Mark'd - Discover Your Endless Experiences</title>
    <meta charset="utf-8">
    <meta name="description" content="travel experiences generator">
    <meta name="keywords" content="travel, marking, planning, experiences, discovery">
    <link rel="author" content="Mark'd Team" href="https://sheridancollege.ca" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' type="image/png" sizes="32x32" href='../icon/favicon.png'>
    <link rel="stylesheet" href="css/navbar.css"> 
    <link rel="stylesheet" href="css/feed.css"> 
</head>

<body>

<div> 
<h1 id="title">Your Travel Feed based on your quiz...</h1>
</div>

<?php
session_start();
$userId=$_SESSION["userId"];
include('includes/dbconfig.php');
 

$stmt = $pdo->prepare("SELECT * FROM `destination`");
$stmt->execute();
?>


<?php


?> 

<div id="parentArticle"> 


<?php
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
    echo("<div class='eachArticle'>"); 
    echo("<button type='submit' class='button'>Mark</button>"); 
    ?><p id="name"><?php echo($row["destinationName"]);?></p> </br><?php     
    ?><p><?php echo($row["city"]); ?></p> </br><?php 
    ?><p><?php echo($row["country"]);?></p> </br><?php
  ?><p><img src=imgs/<?php echo($row["imageLink"]);?> class="back"> </p> </br><?php
    echo("</div>"); 
}
?>



</body>

</html>