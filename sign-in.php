<!DOCTYPE html>
<html>
<head>
    <?php
        include "meta.html";
    ?>
    <link rel="stylesheet" href="css/sign-in.css">
</head>
<body>

<?php
    include "public-navheader.html";
?>
    <section class="firstform">
    <form action="loginprocessing.php" method="POST" id="sign-in-form">

    <div> <p id="title"> Log In </p> </div>

    <div>
    <input type="email" name="emailAddress" placeholder="Enter Your Email Address" required/> </br>
    <input type="password" name="password" placeholder="Enter Your Password" required/> </br>
    </div>

    <div id=formbutton>
    <button type="submit" value="Log In"  class="button">Login</button> </br>
    <a href="register-page.php" class="link">Don't have an account? Sign up</a>
    </div>

</section>
</form>
</body>
</html>
