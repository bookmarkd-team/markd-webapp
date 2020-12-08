<?php

//start session
session_start();

//Quiz Page. Loads The Quiz In a page
include('getUserResultsTags.php');

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
    <link rel="stylesheet" href="css/userhome.css">


    <script>
    //pass the PHP array of the users Tags TO javascript JSON
    var tagsJSON = <?php echo($tagsJSON) ?>;
    console.log(tagsJSON);

    //var destinationsJSON;
    
    //document.addEventListener("load", loadDestinations);
    loadDestinations()

    function loadDestinations() {
        //for (i=0; i < tagsJSON.length; i++) {
            //Open up a asynchronous AJAX Connection
        var xhr = new XMLHttpRequest(); 
        xhr.onreadystatechange = function(e){     
            console.log(xhr.readyState);     
            if(xhr.readyState === 4){        
                console.log(xhr.responseText);// modify or populate html elements based on response.
                    //DOM Manipulation
                //destinationsJSON    
            } 
        }

        xhr.open("GET", "getByTagDestination.php", true); //true means it is asynchronous // Send variables through the url
        xhr.send(); 



       // }
    }



    </script>
</head>

<?php
include "navheader.html";
?>

<body>
<section class ="page">
<div class = "message">
    <h1 id="msg">Welcome, Tony Stark</h1>
</div>

<section class ="menu">

<div class="feed">
    <h1 id="feedmsg">Your Travel Feed</h1>
</div>

<div class="mark">
    <h1 id="markmsg">Your Mark'd Items</h1>
</div>

<div class="profile">
    <h1 id="profilemsg">Your Profile</h1>
</div>

<div class="boards">
    <h1 id="boardsmsg">Your Boards</h1>
</div>




</section>

<div id="parentArticle">

<?php 

//cycles through
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo("<div class='eachArticle'>");
    echo("<button type='submit' class='button'>Mark</button>");
    ?><p id="name"><?php echo($row["destinationName"]);?></p> </br><?php
    ?><p><?php echo($row["city"]); ?></p> </br><?php
    ?><p><?php echo($row["country"]);?></p> </br><?php
    echo("</div>");
}


?>


</section>
</body>
</html>


