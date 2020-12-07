<?php

//start session
session_start();

//Quiz Page. Loads The Quiz In a page
include('quizLoad.php');

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

<div class="topnav">
<nav>
  <ul>
      <img src="imgs/markd.png" id="logo"/>
      <li><a href="#">Feed</a></li>
      <li><a href="#">Discover</a></li>
      <li><a href="#">Quiz</a></li>
      <li><a href="#">Your Boards</a></li>
      <li id="home"><a href="#">Login</a></li>
  </ul>
</nav>
</div>

<body>

<div class="cover">
<div class="cover-text">
<h1 id=head1>Quiz 1</h1>
<h2>Find Your Travel Personality</h2>
</div>
</div>


<form id="quiz">

<?php

//PHP Array to load questions HTML based on how many questions there are from the database pull.
    while ($row = $stmtQuizLoad->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <div class = "questionRow">
            <!-- use this big div as ever question "row" and style accordingly -->
            <div class = "question">
                <h1><?php echo ($row["questionString"]); ?> </h1>
                <select id=<?php echo ("question". $row["questionId"]); ?> name=<?php echo ($row["questionId"]); ?>>
                    <option value=<?php echo ($row["resultOption1"]); ?>><?php echo ($row["resultOption1"]); ?></option>
                    <option value=<?php echo ($row["resultOption2"]); ?>><?php echo ($row["resultOption2"]); ?></option>
                </select>
            </div>

            <div class="recomenations">
                <!-- use this box to put what ever on the right side of the page -->
                <h1>Recommendations</h1>
            </div>
        </div>
<?php
    }

?>
<!-- closing form tags -->
<input type="submit">
</form>

<!-- Java Script -->
<script>
var form = document.querySelectorAll("#quiz")[0];

form.addEventListener("submit", storeAnswersInDB);

var postAnswersText= [];

//Ajax to post quiz results in the database
function storeAnswersInDB(event) {
    //prevent default behaviour of form
    event.preventDefault()

    console.log(form);

    //Get all the answers and input form the HTML form and load it into an array

    for (i=0; i < form.elements.length; i++) {

        if ( form.elements[i].localName == "select" ){
        var addAnswerArray = '{ "questionId":'+ parseInt(form.elements[i].name) + ',"answer":' + '"' + form.elements[i].value + '"}';

        postAnswersText.push(addAnswerArray);
        }
    }
    //convert array items to JSON for easy parsing later
    for (i=0; i < postAnswersText.length; i++) {
    postAnswersText[i] = JSON.parse(postAnswersText[i]);
    }

    //log the array with jsons after conversion
    console.log(postAnswersText);


    //Start array to post things into questionansweruser table for each answer
    for (i=0; i < postAnswersText.length; i++) {

        //Open up a asynchronous AJAX Connection
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function(e){
            console.log(xhr.readyState);
            if(xhr.readyState === 4){
                console.log(xhr.responseText);// modify or populate html elements based on response.
                    //DOM Manipulation
            }
        }

        //Make call to to php script to do the insert
        xhr.open("POST","postAnswers.php",true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        var postString = "questionId=" + postAnswersText[i].questionId + "&answer=" + postAnswersText[i].answer ;
        console.log(postString);

        xhr.send(postString);

    }

}


</script>
</body>
</html>
