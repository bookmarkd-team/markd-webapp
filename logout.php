<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include "meta.html";
    ?>
    <link rel="stylesheet" href="css/signin.css">
</head>
<body>
    <?php
    include "public-navheader.html";
    ?>

    <section class="firstform">
    <p>Logout Successful!</p>
    <a href="landing.php">Go back to Home </a>

</section>
</body>
</html>
