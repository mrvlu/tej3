<?php 

$username=$_POST['username'];  # retrieves the values from the form with name username to a local variable, just to make it easier
$password=$_POST['password'];  # https://www.w3schools.com/php/php_superglobals_post.asp

$secretuser="admin";   # server assigned username and password
$secretpassword="1234";
$counter=0;


# if statements allow for control of input and output
# https://www.w3schools.com/php/php_if_else.asp
# this will check to see if the form username and password are the same as the ones in the server
if ($secretuser==$username && $secretpassword==$password){
	echo "<h1>Successful, recognized username</h1>"; 
	echo "Hai ".$username;  #remember that the . is what's used to combine strings (concatenate)
	
}else{  #if they did not match this will be returned
	echo "<h1>Failed</h1>";
	$counter=$counter+1;
	echo "You have tried ".$counter." times";
	
}

#this is outside of the if statement therefore it will always display
echo "<br>";
echo "Your password is ".$password."<br>";



?>