<?php 
session_start();
//start session ?>

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
    <link rel="stylesheet" href="css/quiz.css">
    <link rel="stylesheet" href="css/destination.css">
</head>

<body>
<?php //stmt and pdo and dbgonfig
    $destinationId = $_GET["destinationId"];
    include("includes/dbconfig.php");

    $stmt = $pdo->prepare("SELECT * FROM `destination`
    WHERE `destinationId` = '$destinationId'");

    $stmt->execute();
    $row = $stmt->fetch(PDO:: FETCH_ASSOC);
?>

<div class="banner">
    <div class="title">
    <!-- echo content here for php  -->
        <h1><?php echo($row["destinationName"]);?></h1>
            <h2><?php echo ($row["city"]);?></h2>
            <h2><?php echo ($row["country"]);?></h2>
            <p><?php echo ($row["destinationDescription"]);?></p>
    </div>
<div class="create">
    <!-- markd button -->
    <h1 id="text2">Mark this destination</h1>
    <button data-destination ='<?php echo($row["destinationId"]);?>' type='submit' class='button'>Mark</button>
    <!-- not sure if we need the data-* attribute ^here^... we can get rid of that part if necessary -->
</div>
</div>
<div class="image">
    <!-- echo image here for php  -->
    <p><img src="imgs/<?php echo ($row["imageLink"]);?>"/></p>
</div>
</body>
</html>