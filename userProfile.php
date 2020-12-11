<!-- 
show name, picture, edit profile page
getUserDetails.php

and All destinations that user has marked.
"get-user-likes" (php)
getDestinationById.php -->


<?php

//start session
session_start();

//receive inputs
$userId = 1; //$_SESSION["userId"]; //what user's answers do we need

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

print_r($userSavedDestinations);

$destinationJSON = json_encode($userSavedDestinations);
echo ($destinationJSON);

?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<link rel="stylesheet" href="css/boards.css">
<link rel="stylesheet" href="css/feed-page.css">
<div id="bio">
<img src="pig.jpg" height=200 width=200 alt="profile-picture"/> </br>
<label id=name>Full Name</label> </br>
<textarea id="bio" name="bio" rows="5" cols="100"> </textarea> </br>
<label id=boards>Boards</label> </br>
 </div>
<div id="buttonArea">
<a href="edit-boards.html"><button class="button">Edit Profile</button></a></br>
</div>
<body>

<a href="add-board.html" ><button class="addButton"> Add A Board </button></a>


<?php

//Load all saved Destinations for  user

for ($i = 0; $i < count($userSavedDestinations); $i++){

$stmtLoadDestinations = $pdo->prepare("SELECT `destinationId`, `destinationName`, `destinationDescription`, `city`, `country`, `tagName`, `imageLink`, `landingPageFlag`, `created_at` FROM `destination` WHERE `destinationId` = '$userSavedDestinations[$i]'");

$stmtLoadDestinations->execute();


    while($result= $stmtLoadDestinations->fetch(PDO::FETCH_ASSOC)){

        //cycles through
        ?>
        <div class='eachArticle' style="background-image: url('<?php echo('imgs/'.$result["imageLink"]);?>') ; background-size: cover">
        <button data-destination ='<?php echo($result["destinationId"]);?>' type='submit' class='button'>Mark</button>
        <p id="name"><?php echo($result["destinationName"]);?></p> </br>
        <p><?php echo($result["city"]); ?> </p> </br>
        <p><?php echo($result["country"]);?></p> </br>
        </div>



        <?php
    }

}

?>

</body>

</html>
