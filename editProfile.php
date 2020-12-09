<!-- Allo edit of user name, password and email -->
<?php
include "navheader.html"; 
?> 
<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="css/profile.css">
<title></title>
</head>

<body>
<div id="all">
<div id="profile">  
<img src="pig.jpg" alt="Profile Picture" width="300" height="300"> 
<label id="profile">Hello</label>
</div>

<div id="form">
<label id="title"> Your Profile </label></br> 
<label>First Name:</label><input type="text" id="fName" placeholder="New First Name"> </br>
<label>Last Name:</label><input type="text" id="lName" placeholder="New Last Name" > </br>
<label>Username:</label><input type="text" id="username" placeholder="New Username" ></br>
<label>Password:</label><input type="password" id="password" placeholder="New Password"> </br>

<button type="submit" value="update"  class="button">Update Account Info</button></br>

</div>
</div>

</body>

</html>