<?php 
//A session is a way to store information (in variables) to be used across multiple pages.
//https://www.w3schools.com/php/php_sessions.asp
session_start(); 

print_r($_SESSION); //we can see what is stored in our session variables with this command 

?>
<html>

<head><title>Login Page</title></head>
<body>

<h1>Fancy Login Page (do not hack)</h1>

<?php 
if (isset($_SESSION['login'])){ // Checks to see if there is a value in the Session table for the login, True if you have saved something, False if it's "not set" yet
  echo "<b>You are already logged in!".$_SESSION['login'];
}else{
  echo "<b>Please log in to continue.</b>";
}

?>
  
<form action="verify.php" method="post">
    User Name:<br>
    <input type="text" name="username"><br><br>
    Password:<br>
    <input type="password" name="password"><br><br>
    <input type="submit" name="submit" value="Send it off to space">
</form>

</body>
</html>
