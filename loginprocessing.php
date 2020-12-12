<?php
//start session
session_start();
//processing the login

//receive input
include "navheader.html"; 
$emailAddress = $_POST["emailAddress"];
$password = $_POST["password"];


include('includes/dbconfig.php');


$stmt = $pdo->prepare("SELECT * FROM `user`
WHERE `emailAddress` = '$emailAddress' AND `password` = '$password'");

$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC); 
?> 

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/login-processing.css">
<link rel="stylesheet" href="css/navbar.css">  
</head>

<body>
<?php
if($row){
    //session declarations
    $_SESSION["userId"] = $row["userId"];
	//successful login
	?>
	<div class="login-form"> 
	<p>Welcome back! Take the Travel Quiz</p> <!-- UPDATED for demo run, change back to "Welcome Back" after Tuesday -->
	<a href="quiz.php">Go to Travel Quiz</a>
	</div>
	
<?php
}else{
	//incorrect input
?>
	<div class="login-form">
	<p>Incorrect username/password. Please Try Again.</p>
	<a href = "sign-in.php">Back to Login</a>
	</div>

<?php
}
?>


</body>

</html>

