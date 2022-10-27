<?php 
//A session is a way to store information (in variables) to be used across multiple pages.
//https://www.w3schools.com/php/php_sessions.asp
session_start(); 

print_r($_SESSION); //we can see what is stored in our session variables with this command 

?>

<?php 

$username=$_POST['username'];  # assign the values from the form with name username to a local variable, just to make it easier
$password=$_POST['password'];  # 

$secretuser="admin";   # server assigned username and password
$secretpassword="1234";
$counter=0;


# if statements allow for control of input and output
# https://www.w3schools.com/php/php_if_else.asp
if ($secretuser==$username && $secretpassword==$password){

  echo "<h1>Successful, recognized username</h1>"; 
	echo "Hai ".$username;  #remember that the . is what's used to combine strings 
  $_SESSION["login"] = $username;

	
}else{
  
	echo "<h1>Failed</h1>";
	$counter=$counter+1;
	echo "You have tried ".$counter." times";
	
}

echo "<br>";
echo "Your password is ".$password."<br>";
echo 5+3; // I can do math
echo "<br>";
print_r($_SESSION); //we can see what is stored in our session variables with this command



?>