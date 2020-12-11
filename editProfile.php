<!-- Allow edit of user name, password and email -->
<?php
//updates user details in user table 
//start session
session_start();
include ("meta.html");
include ("navheader.html"); 
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


//receive inputs
$userId = 2; //$_SESSION["userId"]; //what user is updating deatils?
$firstName = "test";//$_GET["firstName"];
$lastName = "tester";//$_GET["lastName"];
$emailAddress = "tester@email.com";//$_GET["emailAddress"];
$password = "4352";//$_GET["password"];

//connect to db
include('includes/dbconfig.php');

$stmt = $pdo->prepare("SELECT * FROM `user` 
WHERE `user` . `userId` = $userId");

$stmt->execute();
?>

<div id="all">
<div id="profile">  
<img src="pig.jpg" alt="Profile Picture" width="300" height="300"> 
<label id="profile">Hello</label>
</div>

<p id="thanks" style="display:none;">Profile Updated!</p> <!--this needs to be styled! PLEASE AND TY-->
   
<div id="form">
<form id="editProfile">
<label id="title"> Your Profile </label></br> 
<label>First Name:</label><input type="text" id="firstName" placeholder="<?php echo($firstName);?>"></br>
<label>Last Name:</label><input type="text" id="lastName" placeholder="<?php echo($lastName);?>"></br>
<label>Email Address:</label><input type="text" id="emailAddress" placeholder="<?php echo($emailAddress);?>"></br>
<label>Password:</label><input type="password" id="password" placeholder="<?php echo($password);?>"></br>
<button type="submit" value="update" id="update-data" class="button">Update Account Info</button></br>
</form>
</div>
</div>

<script>
    let updateData = document.querySelectorAll("#update-data")[0];
    let form = document.querySelectorAll("#editProfile")[0];
    let firstName = document.querySelectorAll("#firstName")[0];
    let lastName = document.querySelectorAll("#lastName")[0];
    let emailAddress = document.querySelectorAll("#emailAddress")[0];
    let password = document.querySelectorAll("#password")[0];
    let thanks = document.querySelectorAll("#thanks")[0];

    console.log(firstName);

    updateData.addEventListener('click', updateDataEv, false);

    function updateDataEv(event){
        event.preventDefault();
        console.log(firstName.value); //check to see if it's working

        var xhr = new XMLHttpRequest(); 
        xhr.onreadystatechange = function(e){     
            console.log(xhr.readyState);     
            if(xhr.readyState === 4){        
                console.log("CHECK DB TABLE");// modify or populate html elements based on response.
            } 
            //DOM manipulation
            form.style.display= 'none';
            thanks.style.display = 'block';

        };
        
        var requestData = "firstName="+firstName.value+"&lastName="+lastName.value+"&emailAddress="+emailAddress.value+"&password="+password.value;
        xhr.open("POST", "editUserDetails.php", true); 
         console.log(requestData);
        //true means it is asynchronous 
        // Send variables through the url
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send(requestData);

    }
</script>
</body>

</html>