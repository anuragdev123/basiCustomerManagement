<?php

$connect=mysqli_connect("localhost","root","","nandnistudiodata")or die("Can't Connect...");
	if(isset($_POST['submit2'])){
$name=$_POST['name'];
$city=$_POST['city'];
$phoneno=$_POST['phoneno'];
$bookingdate=$_POST['bookingdate'];
$functiondate=$_POST['functiondate'];
$occasion=$_POST['occasion'];
$size=$_POST['size'];
$numpic=$_POST['numpic'];
$totalamount=$_POST['totalamt'];
$advanceamount=$_POST['advpaid'];
$dueamount=$_POST['dueamt'];
$comment=$_POST['comment'];

 
 
mysqli_query($connect,"INSERT INTO `bookingphoto` (`name`, `bookingdate`, `functiondate`, `occasiontype`, `phonenumber`, `size`, `city`, `numberofphoto(approx)`, `totalamount`, `amountpaid`, `dueamount`, `comment`) 
	 VALUES ('$name','$bookingdate','$functiondate','$occasion','$phoneno','$size','$city','$numpic','$totalamount','$advanceamount','$dueamount','$comment')");

				
	if(mysqli_affected_rows($connect) > 0){
	echo "<p>record Added</p>";
	
} else {
	echo "record NOT Added<br />";
	
}
}

  ?>