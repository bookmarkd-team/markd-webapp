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

// print_r($userTags);

$tagsJSON = json_encode($userTags);
// echo ($tagsJSON);

?>

<?php
include "navheader.html";
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
    <link rel="stylesheet" href="css/user-home.css">


</head>

<body>


<div>
<h1 id="title">Your Travel Feed based on your quiz...</h1>
</div>
<div class="parentArticle">
<?php

//Load all Destinations for the Tags
for ($i = 0; $i < count($userTags); $i++){

$stmtLoadDestinations = $pdo->prepare("SELECT `destinationId`, `destinationName`, `destinationDescription`, `city`, `country`, `tagName`, `imageLink`, `landingPageFlag`, `created_at` FROM `destination` WHERE `tagName` = '$userTags[$i]' ");

$stmtLoadDestinations->execute();

while($result= $stmtLoadDestinations->fetch(PDO::FETCH_ASSOC)){

    //cycles through
    ?>
    <div class='eachArticle' style="background-image: url('<?php echo('imgs/'.$result["imageLink"]);?>') ; background-size: cover">
    <button data-destination ='<?php echo($result["destinationId"]);?>' type='submit' id="mark">Mark</button>
    <div class="content">
    <p id="name"><?php echo($result["destinationName"]);?></p> </br>
    <p><?php echo($result["city"]); ?> </p> </br>
    <p><?php echo($result["country"]);?></p> </br>
    <button type="submit" id="discover"><a href="destination.php?destinationId=<?php echo($result["destinationId"]);?>">Discover</a></button>
    </div>
    </div>
    


        <?php
    }
}

?>
</div>
<!-- Linking JavaScript -->
<script src="markd.js"> </script>

</body>
</html>


