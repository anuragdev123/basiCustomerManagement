
<?php
$connect1=mysqli_connect("localhost","root","","nandnistudiodata")or die("Can't Connect...");
	
	if(isset($_POST['submit3'])){
		$id= $_POST['id'];
$name=$_POST['name'];
$city=$_POST['city'];
$phoneno=$_POST['phoneno'];
$type=$_POST['type'];
$clickeddate=$_POST['clickeddate'];
$gender=$_POST['gender'];
$size=$_POST['size'];
$numpic=$_POST['numpic'];
$totalamount=$_POST['totalamt'];
$advanceamount=$_POST['advpaid'];
$dueamount=$_POST['dueamt'];
$comment=$_POST['comment'];
echo $gender;
echo $type;
echo $id;
 
mysqli_query($connect1,"UPDATE bookingphoto SET name='$name',bookingdate='$clickeddate',functiondate='$gender',phonenumber='$phoneno',occasiontype='$type',city='$city',size='$size',numberofphoto='$numpic',totalamount='$totalamount',amountpaid='$advanceamount',dueamount='$dueamount',comment='$comment' WHERE 'id' = $id");
				
	if(mysqli_affected_rows($connect1) > 0){
	
	header("location:completedpic.php");
	
} else {
	echo "record NOT Added<br />";
	
}
}
  ?>