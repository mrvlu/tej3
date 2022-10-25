<?php 

# retrieve value from URL picnum to a variable, just easier to type
# notice that we use $_GET and not $_POST
# GET the value of picnum from the URL after the ? show_image.php?picnum=0 and store it for use

$picnum=$_GET['picnum'];  
$size=3;

# If you want to pass more, you can. Each variable value is added on with & symbol 
# Example: 
# http://localhost/show_image.php?picnum=0&size=75

#Class Exercise: Implement into gallery a size selector so you can choose to display
#Small: size=25 Medium: size=50 Large: size=75 
#more reading on GET here : http://html.net/tutorials/php/lesson10.php

echo "<h1>Gallery</h1>"; 
echo "Here is the image you requested in large: ".$picnum;  #remember that the . is what's used to combine strings (concatenate)
echo "<br>";
echo "<h2>The Mark ".($picnum+1). " version of Iron Man"; 
#notice that math should be done in parentheses, can you tell me why? scroll all the way down to see answer
echo "<img src='images/".$picnum.".gif' width='75%'>";


if ($picnum >=$size){
	echo "<h1>No more pictures for now</h1>";
}else{
	echo "<a href='show_image.php?picnum=".($picnum+1)."'>Next</a><br>";
}







# The addition ($picnum+1) needs to be done in brackets because 
# without brackets: $picnum+1. <- the period is interpreted as a decimal and not
# the symbol to concatenate (add two strings together).   
?>










