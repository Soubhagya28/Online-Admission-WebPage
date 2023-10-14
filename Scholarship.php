<style type="text/css">
		.navigation
		{
			margin:0;
			padding:0 1em;
			background:#000;
			height:3em;
			list-style:none;
			text-decoration:none;
		}
		.listitem
		{
			float:left;
			height:100%;
			margin-right:1em;
			padding:0 1em;
		}
		.listitem a
		{
			color:#fff;
			text-decoration:none;
			font-weight: bold;
			text-transform: uppercase;
			float:left;
			height:100%;
			line-height:3;	
		}
		.listitem a:hover
		{
			color:orange;
			text-decoration:underline;
						
		}
	</style>
<?php
include("connection.php");
error_reporting (0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>SCHOLARSHIP FORM</title>

</head>
<body>

	<div class="wrapper">
        <div class="neon-wrapper">
            <span class="txt" >Online Admission System</span>
            <span class="gradient"></span>
            <span class="dodge"></span>
        </div>
    </div>

	<ul class="navigation">
			<li class="listitem"><a href="admission.php">College Scholarship</a></li>
			<li class="listitem"><a href="displaystudent.php">Display Student List</a></li>
			<li class="listitem"><a href="gallery.php">College Gallery</a></li>
			<li class="listitem"><a href="contact.php">Contact Us</a></li>
			<li class="listitem"><a href="Scholarshipsavailable.php">Scholarships Available</a></li>
		</ul>
		</ul>

	<center>


<marquee><h1>College Scholarship Form</h1></marquee>
<hr>
<form action="" method="GET">
<table bgcolor="99FF99" width="1200px">
	
	<tr>
		<td>Student Id</td>
		<td><input type="TEXT" name="Student_Id"></td>
		<td>Name</td>
		<td><input type="TEXT" name="Student_Name"></td>
	</tr>
	<tr>
		<td>Course</td>
		<td>
			 <select name="Course" id="Course">
    <option value="Btech">Bbbbtech</option>
    <option value="Mtech">Mtech</option>
  </select>
		</td>
		<td>Stream</td>
		<td>
			 <select name="Stream" id="Stream">
    <option value="Comuter science">Computer science</option>
    <option value="Mechanical">Mechanical</option>
    <option value="Electrical">Electrical</option>
  </select>
		</td>
	</tr>
	<tr>
		<td>Father's Name</td>
		<td><input type="TEXT" name="Father's_Name"></td>
		<td>Occupation</td>
		<td>
		<select name="Father's_Occupation" id="Occupation">
    <option value="Government Employee">Government Employee</option>
    <option value="Private Employee">Private Employee</option>
    <option value="Self Employee">Self Employee</option>
    <option value="Bussiness">Bussiness</option>
    <option value="Others">Others</option>
  </select>	
		</td>
	</tr>
	<tr>
		<td>Mother's Name</td>
		<td><input type="TEXT" name="Mother's_Name"></td>
		<td>Occupation</td>
		<td>
		<select name="Mother's_Occupation" id="Occupation">
    <option value="Government Employee">Government Employee</option>
    <option value="Private Employee">Private Employee</option>
    <option value="Self Employee">Self Employee</option>
    <option value="Bussiness">Bussiness</option>
    <option value="Homemaker">Homemaker</option>
    <option value="Others">Others</option>
  </select>	
		</td>
	</tr>
	<tr>
		<td>Gender</td>
		<td><input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label><br>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label><br>
<input type="radio" id="other" name="gender" value="other">
<label for="other">Other</label></td>
		<td>Address</td>
		<td>
			<input type="TEXT" name="Address">
		</td>
	</tr>
	<tr>
		<td>Mobile</td>
		<td><input type="TEXT" name="Mobile_Number"></td>
		<td>Email</td>
		<td><input type="TEXT" name="Email"></td>
	</tr>
	<tr>
		<td>Caste</td>
		<td>
			<select name="Caste" id="Caste">
    <option value="SC">SC</option>
    <option value="ST">ST</option>
    <option value="0BC">OBC</option>
    <option value="GENERAL">GENERAL</option>
  </select>	
       </td>
		<td> Caste Document</td>
		<td><input type="file" id="myFile" name="Filename"></td>
	</tr>
	<tr>
		<td>
			Physical Disability if any
		</td>
		<td>
			<input type="TEXT" name="PhysicalDisability">
		</td>
	</tr>
	<tr> 
		<td colspan="2">
			Education Details For Class X
		</td>
		<td>
			Year of passing
		</td>
		<td>
			<input type="TEXT" name="Education_X">
		</td>
	</tr>
	<tr>
		<td>
			<input type="TEXT" placeholder="Board Name" name="Bnamex">
		</td>
		<td>
			<input type="TEXT" placeholder="School Name" name="Snamex">
		</td>
		<td>
			<input type="TEXT" placeholder="Total Percentage" name="Tpercentx">
		</td>
		<td>
			<input type="TEXT" placeholder="Percentage you got" name="Percentx">
		</td>
	</tr>
	<tr> 
		<td colspan="2">
			Education Details For Class XII
		</td>
		<td>
			Year of passing
		</td>
		<td>
			<input type="TEXT" name="Education_XII">
		</td>
	</tr>
	<tr>
		<td>
			<input type="TEXT" placeholder="Board Name" name="Bnamexii">
		</td>
		<td>
			<input type="TEXT" placeholder="School Name" name="Snamexii">
		</td>
		<td>
			<input type="TEXT" placeholder="Total Percentage" name="Tpercentxii">
		</td>
		<td>
			<input type="TEXT" placeholder="Percentage you got" name="Percentxii">
		</td>
	</tr>
	
	<tr>
		<td>
			Roll Number
		</td>
		<td>
			<input type="INT" name="Roll_Number">
		</td>
		<td>
			Year
		</td>
		<td>
			<input type="INT" name="Year">
		</td>
	</tr>
	<tr>
		<td>
			Scholarship Applied For
		</td>
		<td>
			<input type="TEXT" name="Scholarship_Applied_For">
		</td>
	</tr>
	<tr>
		<td>
			Reason For Applying the Scholarship
		</td>
		<td>
			<input type="TEXT" name="Reason_Behind_It">
		</td>
	</tr>
	<tr>
		<td>
			
		</td>
		<td>
			
		</td>
		<td>
			<input type="SUBMIT" name="">
		</td>
		<td>
			
		</td>
	</tr>

</table>
</form>

<?php
$si=$_GET['student_id'];
$na=$_GET['sname'];
$co=$_GET['Course'];
$st=$_GET['Stream'];
$fn=$_GET['FathersName'];
$oc=$_GET['FOccupation'];
$mn=$_GET['MothersName'];
$ocu=$_GET['MOccupation'];
$ge=$_GET["gender"];
$ad=$_GET['Address'];
$mo=$_GET['mobile'];
$em=$_GET['email'];
$pm=$_GET['ParentsMobile'];
$pem=$_GET['ParentsEmail'];
$nat=$_GET['Nationality'];
$bd=$_GET['BloodGroup'];
$sim=$_GET['Filename'];
$pdia=$_GET['PhysicalDisability'];
$edfcx=$_GET['Edx'];
$bnx=$_GET['Bnamex'];
$snx=$_GET['Snamex'];
$tpygx=$_GET['Tpercentx'];
$pygx=$_GET['Percentx'];
$enx=$_GET['Ex'];
$max=$_GET['Mx'];
$phx=$_GET['Px'];
$chx=$_GET['Cx'];
$bix=$_GET['Bx'];
$cox=$_GET['Compx'];
$ssdx=$_GET['Ssx'];
$slx=$_GET['Sx'];
$edfcxii=$_GET['Edxii'];
$bnxii=$_GET['Bnamexii'];
$snxii=$_GET['Snamexii'];
$tpygxii=$_GET['Tpercentxii'];
$pygxii=$_GET['Percentxii'];
$enxii=$_GET['Edxii'];
$maxii=$_GET['Mxii'];
$phxii=$_GET['Pxii'];
$chxii=$_GET['Cxii'];
$slxii=$_GET['Slxii'];
$coxii=$_GET['Compxii'];
$ecaia=$_GET['Eactivity'];
$Hbb=$_GET['Hb'];

$query="insert into admission(student_id,sname,course,stream,fname,foccupation,mname,moccupation,gender,address,mobile,email,pmobile,pemail,nationality,bloodgroup) values('$si','$na','$co','$st','$fn','$oc','$mn','$ocu','$ge','$ad','$mo','$em','$pm','$pem','$nat','$bd')";
$data=mysqli_query($conn,$query);
if($data)
{
	echo "Data insert into database";
}


?>

</center>
</body>
</html>