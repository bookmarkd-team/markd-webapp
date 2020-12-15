<?php
session_start();
//start session
include "meta.html";
include('navheader.html');
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/destination-page.css">
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

<script >
    var userId= <?php echo($userId) ?>;
</script>
<script src="markd.js"></script>
</body>
</html>
