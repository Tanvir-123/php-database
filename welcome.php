<!DOCTYPE html>
<html>
<body>

<?php

$username = $pass = $loginmessage = "";
$usernameerr = $passerr = "";

if($_SERVER['REQUEST_METHOD'] == "POST") {

    
    header('location: login_form.php');  

}
?>

<h1>Welcome Page:</h1>
 

<form action="" method="post">
    <input type="submit" value="Logout">
</form>

 
</body>
</html>