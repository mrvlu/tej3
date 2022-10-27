<?php 
//A session is a way to store information (in variables) to be used across multiple pages.
//https://www.w3schools.com/php/php_sessions.asp
session_start(); 

print_r($_SESSION); //we can see what is stored in our session variables with this command 

?>

<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>

  
<b> You are now logged out. </b>
  
</body>
</html>