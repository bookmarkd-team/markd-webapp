<?php
include "meta.html";
//start session
session_start();
include('navheader.html');
//receive inputs
$userId = $_SESSION["userId"]; //what user's answers do we need

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

//print in console the usertags to check it
//print_r($userTags);

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/user-homepage.css">

</head>

<body>


<div>
    <h1 id="title">Your Travel Feed based on your quiz...</h1>
</div>
<div class="parentArticle">
<?php

//create an array to store all the loaded destinations to be used in Javascript possibly
$arrayOfDestinations = array();


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

    //add loaded locations to the array
    array_push($arrayOfDestinations, array($userId, $result["destinationId"]));
    }
}

//capture all the destinations and put it in a json File to be used in the checking if all the destinations are marked. And dimming the MARKED button or removing them
$arrayOfDestinationsJSON = json_encode($arrayOfDestinations);
//print_r($arrayOfDestinations);
//echo ($arrayOfDestinationsJSON);

?>

<!-- Linking JavaScript. Saving User id as javascript variable too  -->
<script >
    var userId= <?php echo($userId) ?>;
    //console.log(userId);

    //console.log( <?php //echo($arrayOfDestinationsJSON) ?>)
</script>

<script src="markd.js"></script>


</body>
</html>
