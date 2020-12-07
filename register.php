<?php
    include "navheader.html";
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/sign-in.css">

</head>
<body>
<section class="firstform"> 

   

    <form action="registrationprocessing.php" method="POST" form id= "sign-in-form">
    <div>
    <p id="title">Sign Up</br></p>
    </div>
    
    <div>
    <input type="text" name="firstName" id="firstName" placeholder="First name" required/>

    <input type="text" name="lastName" id="lastName" placeholder="Last name " required/>

    <input type="email" name="emailAddress" id="emailAddress" placeholder="Email Address" required/>

    <input type="password" name="password" placeholder="New password" required/> </br>
    </div>


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
