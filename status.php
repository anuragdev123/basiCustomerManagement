
<?php
$connect=mysqli_connect("localhost","root","","nandnistudiodata")or die("Can't Connect...");
	 $con=  mysqli_query($connect, "select * from status ");


$id= $_POST['c_id'];
$status=$_POST['status'];

while ($row =  mysqli_fetch_array($con)) {
	if($row['c_id']==$id){
		mysqli_query($connect,"UPDATE status SET status='$status' where c_id=$id");
		       
				
	if(mysqli_affected_rows($connect) > 0){
	echo "record updated";
	die();
	//header("location:completedpic.php");
	
} else {
	echo "record NOT Added<br />";
	
}
	}
	
}
 		mysqli_query($connect,"INSERT INTO status(c_id,status)
		        VALUES ('$id','$status')");
				
	if(mysqli_affected_rows($connect) > 0){
	echo "record Added<br />";
	//header("location:completedpic.php");
	
} else {
	echo "record NOT Added<br />";
	
}


  ?>