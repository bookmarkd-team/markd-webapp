<?php

//start session
session_start();
//Quiz Page. Loads The Quiz In a page
include "meta.html";
include "navheader.html";
include('quizLoad.php');


?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/quizpage.css">
    <link rel="stylesheet" href="css/userhome.css">
</head>


<body>
<div class="cover">
<div class="cover-text">
<h1 id="head">Quiz 1</h1>
<p id="text">Find Your Travel Personality</p>
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

            <div class="recommendations">
                <!-- use this box to put what ever on the right side of the page -->
                <h1>Recommendations</h1>
            </div>
        </div>
<?php
    }

?>
<!-- closing form tags -->
<input id="submit" type="submit">
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
