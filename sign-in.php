<?php
    include "navheader.html";
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/sign-in.css">
</head>
<body>
    <div>
    <label id="title">
    Log In</br>
    </label>
    </div>

    <section class="firstform">
    <form action="loginprocessing.php" method="POST" id="sign-in-form">

    <div>
    <input type="text" name="emailAddress" placeholder="Enter Your Email Address" required/> </br>
    <input type="password" name="password" placeholder="Enter Your Password" required/> </br>
    </div>

    <div id=formbutton>
    <button type="submit" value="Log In"  class="button">Login</button> </br>
    <a href="register.html" class="link">Don't have an account? Sign up</a>
    </div>


</section>
</form>
</body>
</html>
