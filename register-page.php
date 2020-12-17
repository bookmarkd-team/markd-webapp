<!DOCTYPE html>
<html>
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
    <form action="registrationprocessing.php" method="POST" form id= "sign-in-form">

    <div>
    <p id="title">Sign Up</br></p>
    </div>

    <div>
    <input type="text" name="firstName" id="firstName" placeholder="First Name" required/>

    <input type="text" name="lastName" id="lastName" placeholder="Last Name"required/>

    <input type="email" name="emailAddress" id="emailAddress" placeholder="Email Address" required/>

    <input type="password" name="password" placeholder="New Password" required/> </br>
    </div>

    <div>
    <div id=formbutton>
    </div>

    <div>
    <button type="submit" value="register"  class="button">Register</button> </br>
    <a href="sign-in.php" class="link">Already a User? Login Here</a>
    </div>

</form>
</section>
</body>
</html>
