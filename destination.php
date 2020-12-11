<?php 
session_start();
//start session 
include('navheader.html');
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
   
    <link rel="stylesheet" href="css/destination.css">
</head>

<body>
<?php //stmt and pdo and dbgonfig
    include("includes/dbconfig.php");
    $destinationId = $_GET["destinationId"];
    

    $stmt = $pdo->prepare("SELECT * FROM `destination`
    WHERE `destinationId` = '$destinationId'");

    $stmt->execute();
    $row = $stmt->fetch(PDO:: FETCH_ASSOC);
?>


    <div class="title" style="background-image: url(imgs/<?php echo ($row["imageLink"]);?>);  background-size: cover; background-position:center; background-repeat: no-repeat; ">
    <!-- echo content here for php  -->
   
    <div class="banner">
    
        <h1><?php echo($row["destinationName"]);?></h1>
            <h2><?php echo ($row["city"]);?></h2>
            <h2><?php echo ($row["country"]);?></h2>
            <p><?php echo ($row["destinationDescription"]);?></p>
            <button data-destination ='<?php echo($row["destinationId"]);?>' type="submit" class="button">Mark</button>

    </div>
    </div>

    <!-- markd button -->
    
    
    <!-- not sure if we need the data-* attribute ^here^... we can get rid of that part if necessary -->

<!-- </div> -->
<!-- <div class="image"  style="background-image: url(imgs/<?php echo ($row["imageLink"]);?>)"> -->
    <!-- echo image here for php  -->
    <!-- <p><img src="imgs/<?php echo ($row["imageLink"]);?>" id="picture"/></p>
</div> -->
<script src="markd.js"></script>
</body>
</html>