<!DOCTYPE html>
<html>
<body>

<?php

$username = $pass = $loginmessage = "";
$usernameerr = $passerr = "";

if($_SERVER['REQUEST_METHOD'] == "POST") {

    if(empty($_POST['username'])) {
        $usernameerr = "Please Fill up the username!";
    }

    else if(empty($_POST['password'])) {                    
        $passerr = "Please Fill up the password!";
        
    }
    else { 
        $username = $_POST['username'];
        $pass = $_POST['password'];

        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "wtk";
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

        $result = $conn->query("SELECT * FROM users WHERE username='". $username."' AND password='". $pass."'");

        if ($result->num_rows > 0) {
            header('location: welcome.php');          
        }
        else {
            $loginmessage = "Login Failed";
        }        
        $conn -> close();
    }

}
?>

<h1>Login form:</h1>
 

<form action="" method="post">
 <fieldset>
 <label for="username">Username:</label>
 <input type="text" id="username" name="username"> 
 <br>
 <?php echo $usernameerr ?> 
 <br>
 <label for="password">Password:</label>
 <input type="password" id="password" name="password">
 <br>
 <?php echo $passerr ?> 
 <br>  
 <input type="submit" value="Login">
 </fieldset>

 <br><br>
 <?php echo $loginmessage ?> 

</form>

 
</body>
</html>