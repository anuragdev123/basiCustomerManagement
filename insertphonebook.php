<?php

$connect=mysqli_connect("localhost","root","","nandnistudiodata")or die("Can't Connect...");
	
$name=$_POST['name'];
$phoneno=$_POST['mobilenumber'];


 
 
mysqli_query($connect,"INSERT INTO phonebook(name,phonenumber)
		        VALUES ('$name','$phoneno')");
				
	if(mysqli_affected_rows($connect) > 0){
	header("location:index.php");
	
} else {
	echo "record NOT Added<br />";
	
}


  ?>