<?php session_start();
    include "navheader.html";
 session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="mark'd logout page">
    <meta name="keywords" content="logout mark'd">
    <meta name="author" content="mark'd">
    <title>LOGOUT</title>
    <link rel="stylesheet" href="css/signin.css">

</head>
<body>
<section class="firstform">
    <p>Logout Successful!</p>
    <a href="landing.php">Go back to Home </a>
</section>
</body>
</html>