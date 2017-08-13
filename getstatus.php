<?php


$connect=mysqli_connect("localhost","root","","nandnistudiodata")or die("Can't Connect...");
	 $con=  mysqli_query($connect, "select * from status ");
	
  // for ($i=0;$i<mysqli_num_rows($con);$i++) {
  	//  echo '['.($i>0?',':'').json_encode(mysqli_fetch_object($con)).']';
  // }echo "[";
while ($row = $con->fetch_assoc()) {
	// echo '[id:'.$row['c_id'].','.'status:'.$row['status'];
   echo '{'.'"id":'.$row['c_id'].','.'"status":"'.$row['status'].'"},';
}


?>