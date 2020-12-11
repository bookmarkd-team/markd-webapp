<!-- Allow edit of user name, password and email -->
<?php
//updates user details in user table 
//start session
session_start();
include "navheader.html"; 
?> 
<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="css/profile.css">
<title></title>
</head>
<body>
<?php // php integration variable and db config
//receive inputs
$userId = $_SESSION["userId"]; //what user is updating deatils?

//receive inputs
$userId = 2; //$_SESSION["userId"]; //what user is updating deatils?
$firstName = "Jamie";//$_GET["firstName"];
$lastName = "Stewart";//$_GET["lastName"];
$emailAddress = "j.stewart@email.com";//$_GET["emailAddress"];
$password = "87654321";//$_GET["password"];

//connect to db
include('includes/dbconfig.php');

$stmt = $pdo->prepare("SELECT * FROM `user` 
WHERE `user` . `userId` = $userId");

$stmt->execute();
$row = $stmt->fetch(PDO:: FETCH_ASSOC);
?>

<div id="all">
<div id="profile">  
<img src="pig.jpg" alt="Profile Picture" width="300" height="300"> 
<label id="profile">Hello</label>
</div>

<div id="form">
<form id="editProfile" action="editUserDetails.php" method="POST" enctype="multipart/form-data">
<label id="title"> Your Profile </label></br> 
<label>First Name:</label><input type="text" id="firstName" placeholder="<?php echo($row[$firstName]);?>"> </br>
<label>Last Name:</label><input type="text" id="lastName" placeholder="<?php echo($row[$lastName]);?>" > </br>
<label>Email Address:</label><input type="text" id="emailAddress" placeholder="<?php echo($row[$emailAddress]);?>" ></br>
<label>Password:</label><input type="password" id="password" placeholder="<?php echo($row[$password]);?>"></br>
<button type="submit" value="update" class="button">Update Account Info</button></br>
</form>
</div>
</div>

</body>

</html>