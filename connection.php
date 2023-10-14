<?php
$servername="localhost";
$username="root";
$password="";
$dbname="collegedb";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
	echo "";
}
else
{
	echo "connection failed";
}
?>
