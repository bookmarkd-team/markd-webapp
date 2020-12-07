<?php
    include "navheader.html";
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/register.css">

</head>
<body>

    <div>
        <label id="title">
            Sign Up</br>
        </label>
    </div>

    <section class="firstform">

    <form action="registrationprocessing.php" method="POST" form id= "sign-in-form">

    <input type="text" name="firstName" id="firstName" placeholder="first name" required/>

    <input type="text" name="lastName" id="lastName" placeholder="last name " required/>

    <input type="email" name="emailAddress" id="emailAddress" placeholder="emailAddress" required/>

    <input type="password" name="password" placeholder="New Password" required/> </br>

    <div>
    <div id=formbutton>
    </div>

    <div>
    <button type="submit" value="register"  class="button">Register</button> </br>
    <a href="sign-in.html" class="link">Already a user? Login</a>
    </div>

</form>
</section>
</body>
</html>
