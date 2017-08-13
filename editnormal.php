
<?php
$connect=mysqli_connect("localhost","root","","nandnistudiodata")or die("Can't Connect...");
	
	if(isset($_POST['submit2'])){
		$id= $_POST['id'];
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

 
mysqli_query($connect,"UPDATE normalphoto SET name='$name',clickdate='$clickeddate',phonenumber='$phoneno',city='$city',size='$size',clickedby='$gender',numberofphoto='$numpic',totalamount='$totalamount',amountpaid='$advanceamount',dueamount='$dueamount',comment='$comment' WHERE id = $id");
				
	if(mysqli_affected_rows($connect) > 0){
	
	header("location:completedpic.php");
	
} else {
	echo "record NOT Added<br />";
	
}
}
  ?>