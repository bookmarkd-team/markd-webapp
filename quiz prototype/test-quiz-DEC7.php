<?php
session_start();
$userId = $_SESSION["userId"];
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
    <link rel="stylesheet" href="css/test.css">
</head>
<body>


<form action="postTest.php" method="POST">

<p>How would you describe your personality?</p>
<input type="radio" class="answer" name="answer" value="upbeat">
<label for="answer">Upbeat</label><br>

<input type="radio" class="answer" name="answer" value="chill">
<label for="answer">Chill</label><br>

<p>What color invigorates you?</p>
<input type="radio" class="answer" name="answer2" value="blue">
<label for="answer2">Blue</label><br>

<input type="radio" class="answer" name="answer2" value="green">
<label for="answer2">Green</label><br>

<p>Where would you rather live?</p>
<input type="radio" class="answer" name="answer3" value="skyscraper">
<label for="answer3">Skyscraper</label><br>

<input type="radio" class="answer" name="answer3" value="treehouse">
<label for="answer3">Treehouse</label><br>

<p>Do you drink coffee or tea?</p>
<input type="radio" class="answer" name="answer4" value="coffee">
<label for="answer4">Coffee</label><br>

<input type="radio" class="answer" name="answer4" value="tea">
<label for="answer4">Tea</label><br>


<button type ="submit" id="button">Submit</button>

</form>
</body>
</html>
