<?php include 'justthemenu.html'; ?>

<?php 

#This example shows how you can send information from one page to another
#without the use of FORM input, in this case. 
#We will embed the data into the #URL string. 

#Example: Google Image search for Iron Man looks like this : 
# https://www.google.com/search?site=&tbm=isch&source=hp&biw=1024&bih=633&q=iron+man&oq=iron+man&gs_l=img.3..0l10.1504.2135.0.2287.8.8.0.0.0.0.142.615.5j2.7.0....0...1ac.1.32.img..2.6.495.f1ZnH8OqptU
# Now google's URL is code generated but you can still see some of the data

echo "<h1>My Iron Man Gallery</h1>";

$count=0;
$size=3; #Size of the gallery

#Automate the building of the Gallery using a while loop 
#Why? Imagine if you had a whole lots of pictures to display!
while ($count<=$size){
	echo "Click on one of the link to view a larger version. <br>";
	echo "<a href='show_image.php?picnum=".$count."'> Image: ".$count."</a><br>";
	echo "<img src='images/".$count.".gif' width='15%'><br>";
	$count=$count+1;

}


?>