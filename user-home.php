<?php

//start session
session_start();
include('includes/navheader.html');
//receive inputs
$userId = 1; //$_SESSION["userId"]; //what user's answers do we need

//connect to db
include('includes/dbconfig.php');

//Get the All user's answers from the table
$stmtLoadUserResults = $pdo->prepare("SELECT * FROM `questionansweruser` WHERE `userId` = '$userId'");

$stmtLoadUserResults->execute();

//variable to store the user tags
$userTags= array();

while($results = $stmtLoadUserResults->fetch(PDO::FETCH_ASSOC)) {  
    //Loop through the db results and add only the tag on each row to the array.
    //echo($results["answer"]); // answer as a string
    
    //add item to an array
    array_push($userTags,$results["answer"]);
    
}

print_r($userTags);

$tagsJSON = json_encode($userTags);
echo ($tagsJSON);

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
    <link rel='icon' type="image/png" sizes="32x32" href='../icon/favicon.png'>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/feed-page.css">



</head>

<body>

<?php
include "navheader.html";
?>

<div>
<h1 id="title">Your Travel Feed based on your quiz...</h1>
</div>

<?php

//Load all Destinations for the Tags
//imporve this place to get destinations for each tag in the array and  and make a giant destination array to hold all the results 
$stmtLoadDestinations = $pdo->prepare("SELECT `destinationId`, `destinationName`, `destinationDescription`, `city`, `country`, `tagName`, `imageLink`, `landingPageFlag`, `created_at` FROM `destination` WHERE `tagName` = '$userTags[0]' OR `tagName` = '$userTags[1]' OR `tagName` = '$userTags[2]' OR `tagName` = '$userTags[3]' ");


$stmtLoadDestinations->execute();


while($result= $stmtLoadDestinations->fetch(PDO::FETCH_ASSOC)){

    //cycles through
    ?>
    <div class='eachArticle' style="background-image: url('<?php echo('imgs/'.$result["imageLink"]);?>') ; background-size: cover">
    <button data-destination ='<?php echo($result["destinationId"]);?>' type='submit' class='button'>Mark</button>
    <p id="name"><?php echo($result["destinationName"]);?></p> </br>
    <p><?php echo($result["city"]); ?> </p> </br>
    <p><?php echo($result["country"]);?></p> </br>
    <button type="submit" class="button">
	<a href="destination.php?destinationId=<?php echo($row["destinationId"]);?>">Discover</a>
	</button>
    </div>



    <?php
}

?>

<!-- Linking JavaScript -->
<script src="markd.js"> </script>
</body>
</html>


