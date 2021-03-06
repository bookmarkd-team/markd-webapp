<!--
show name, picture, edit profile page
getUserDetails.php

and All destinations that user has marked.
"get-user-likes" (php)
getDestinationById.php -->


<?php
include "meta.html";
include "navheader.html";
//start session
session_start();


//receive inputs
$userId = $_SESSION["userId"]; //what user's answers do we need

//connect to db
include('includes/dbconfig.php');

//Get the All user's saves from the SAVE table
$stmtLoadUserResults = $pdo->prepare("SELECT * FROM `save` WHERE `userId` = '$userId'");

$stmtLoadUserResults->execute();

//variable to store the user tags
$userSavedDestinations= array();

while($results = $stmtLoadUserResults->fetch(PDO::FETCH_ASSOC)) {
    //Loop through the db results and add only the tag on each row to the array.
    //echo($results["destinationId"]); // answer as a string

    //add item to an array
    array_push($userSavedDestinations,$results["destinationId"]);

}

//print_r($userSavedDestinations);

// $destinationJSON = json_encode($userSavedDestinations);
// echo ($destinationJSON);

$stmt = $pdo->prepare("SELECT * FROM `user`
WHERE `user` . `userId` = $userId");

$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<link rel="stylesheet" href="css/user-profile.css">

<div id="profileArea">
<?php echo ("Welcome to your Mark'd Destinations, ".$row["firstName"]." ".$row["lastName"])."!"; ?>
 </div>
 
<div id="buttonArea">
<a href="editProfile.php?userId=<?php echo ($userId)?>"><button class="button" id="profile">Edit Profile</button></a></br>
</div>


<div class="parentArticle">
<?php

//Load all saved Destinations for  user

for ($i = 0; $i < count($userSavedDestinations); $i++){

$stmtLoadDestinations = $pdo->prepare("SELECT `destinationId`, `destinationName`, `destinationDescription`, `city`, `country`, `tagName`, `imageLink`, `landingPageFlag`, `created_at` FROM `destination` WHERE `destinationId` = '$userSavedDestinations[$i]'");

$stmtLoadDestinations->execute();


    while($result= $stmtLoadDestinations->fetch(PDO::FETCH_ASSOC)){

        //cycles through
        ?>
        <div class='eachArticle' style="background-image: url('<?php echo('imgs/'.$result["imageLink"]);?>') ; background-size: cover">
        <div id=buttonContainer>
        <button data-destination='<?php echo($result["destinationId"]);?>' type= "submit" class="button" id='delete'>Delete</button>
        <button data-destination ='<?php echo($result["destinationId"]);?>' type='submit' class="button" id='mark'>Mark</button>

        </div>
        <div class="content">
        <p id="name"><?php echo($result["destinationName"]);?></p> </br>
        <p><?php echo($result["city"]); ?> </p> </br>
        <p><?php echo($result["country"]);?></p> </br>
        <button type="submit" class="button" id="discover"><a href="destination.php?destinationId=<?php echo($result["destinationId"]);?>">Discover</a></button>
        </div>
        </div>



        <?php
    }

}

?>

<script >
    var userId= <?php echo($userId) ?>;
</script>
<script src="markd.js"></script>
<script src= "delete.js"></script>

</body>

</html>
