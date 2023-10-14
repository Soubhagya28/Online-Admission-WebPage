<?php
include("connection.php");
$sid=$_GET['si'];
echo $sid;
$query="delete from admission where student_id='$sid'";
$data=mysqli_query($conn,$query);
if($data)
{
	echo "<script>alert('Record deleted')</script>";
	?>
	<meta http-equiv="refresh" content="0; url=http://localhost/caf/displaystudent.php">
	<?php
}
else
{
	echo "<font color='red'>Record not deleted";
}

?>