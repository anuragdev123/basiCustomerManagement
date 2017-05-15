
<?php
$connect=mysqli_connect("localhost","root","","nandnistudiodata")or die("Can't Connect...");
	
	if(isset($_POST['submit1'])){
$name=$_POST['name'];
$city=$_POST['city'];
$phoneno=$_POST['phoneno'];
$clickeddate=$_POST['clickeddate'];
$gender=$_POST['gender'];
$size=$_POST['size'];
$numpic=$_POST['numpic'];
$totalamount=$_POST['totalamt'];
$advanceamount=$_POST['advpaid'];
$dueamount=$_POST['dueamt'];
$comment=$_POST['comment'];

 
 
mysqli_query($connect,"INSERT INTO normalphoto (name,clickdate,phonenumber,city,size,clickedby,numberofphoto,totalamount,amountpaid,dueamount,comment)
		        VALUES ('$name','$clickeddate','$phoneno','$city','$size','$gender','$numpic','$totalamount','$advanceamount','$dueamount','$comment')");
				
	if(mysqli_affected_rows($connect) > 0){
	
	header("location:index.php");
	
} else {
	echo "record NOT Added<br />";
	
}
}
  ?>