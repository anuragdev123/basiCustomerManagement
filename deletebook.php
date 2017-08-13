
<?php

//Define the query
$connect=mysqli_connect("localhost","root","","nandnistudiodata")or die("Can't Connect...");
$id= $_POST['id'];
echo $id;
$query = "DELETE FROM bookingphoto WHERE id=$id LIMIT 1";

//sends the query to delete the entry
mysqli_query ($connect,$query);

if (mysqli_affected_rows($connect) == 1) { 
//if it updated


           header("location:completedpic.php");
?>
<?php
 } else { 
//if it failed
?>

            <strong>Deletion Failed</strong><br /><br />


<?php
} 
?>