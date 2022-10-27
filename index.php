<?php 
//A session is a way to store information (in variables) to be used across multiple pages.
//https://www.w3schools.com/php/php_sessions.asp
session_start(); 

print_r($_SESSION); //we can see what is stored in our session variables with this command 

?>

<html>
  <head>
   
    <title>This is my website</title>
    <!-- Comment (notes for you and others reading the code)  -->
    <!-- Linking to an External Style Sheet -->
        <link rel="stylesheet" href="style.css">



    
  </head>
  <body>
    <h1>My Fictional Company</h1>
    <?php echo '<p>Hello World</p>'; ?> 

<?php include 'justthemenu.html'; ?>
<p><a href="https://www.w3schools.com/">Visit W3Schools.com!</a></p>

<?php

$var="This is a variable, can be anything";
$name="Anthony";

echo "My first PHP script!\r\n";
echo "<br>";
echo " ";
echo 5+3;
echo $var;
echo "<br>";

echo "Hello ".$name;
echo "<br>";

echo "Welcome ".$name;
echo "<br>";

echo "Bye ".$name;


?>
    
    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>