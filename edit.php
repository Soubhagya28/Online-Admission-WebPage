<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link rel="stylesheet" type="text/css" href="footerstyle.css">
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

body {
    margin: 0;
    padding: 0;
  
}
.wrapper {
    height: 150px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #000000; 
}
.txt {
    color: #ffffff;
    background:#000000;
    font-size:80px;
    font-weight: bold;
    font-family: Arial;
    text-transform: uppercase;
}
.txt::before {
    content: 'Online Admission System';
    position: absolute;
    mix-blend-mode: difference;
    filter: blur(3px);
}
.neon-wrapper {
    display:inline-flex;
    filter: brightness(200%);
    overflow: hidden;
}
.gradient{
    background: linear-gradient(114.5793141156962deg, rgba(6, 227, 250,1) 4.927083333333334%,rgba(229, 151, 64,1) 97.84374999999999%);
    position: absolute;
    top: 0;
    left:0;
    width: 100%;
    height:100%;
    mix-blend-mode: multiply;
}
.dodge {
    background: radial-gradient(circle,white,black 35%) center / 25% 25%;
    position: absolute;
    top:-100%;
    left:-100%;
    right:0;
    bottom:0;
    mix-blend-mode: color-dodge;
    animation: dodge-area 3s linear infinite;
}
@keyframes dodge-area {
    to {
        transform: translate(50%,50%);
    }
}

	</style>
	<?php
include("connection.php");
error_reporting (0);
 $sid=$_GET['si'];
$query="select * from admission where student_id='".$sid."'";
$data=mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMISSION FORM</title>
</head>
<body bgcolor="00CCCC">

	<div class="wrapper">
        <div class="neon-wrapper">
            <span class="txt" >Online Admission System</span>
            <span class="gradient"></span>
            <span class="dodge"></span>
        </div>
    </div>
	<ul class="navigation">
			<li class="listitem"><a href="admission.php">College Admission</a></li>
			<li class="listitem"><a href="displaystudent.php">Display Student List</a></li>
			<li class="listitem"><a href="gallery.php">College Gallery</a></li>
			<li class="listitem"><a href="contact.php">Contact Us</a></li>
		</ul>
	<center>

<form action="" method="GET" enctype="multipart/form-data">
<table bgcolor="00CCCC" width="1200px">
	<tr>
		<td>&nbsp;</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<?php
	while($result=mysqli_fetch_assoc($data))
{

	?>

		<tr>
		<td>Student Id</td>
		<td><input type="TEXT" name="student_id" value="<?php echo $_GET['si'];?>"></td>
		<td>Name</td>
		<td><input type="TEXT" name="sname"  value="<?php echo $result['sname'];?>"></td>
		
	</tr>
	<tr>
		<td>Course</td>
		<td>
			 <select name="Course" id="Course">
    <option value="Btech" <?php if($result[course]=='Btech') echo'selected="selected"'; ?> >Btech</option>
    <option value="Mtech" <?php if($result[course]=='Mtech') echo'selected="selected"'; ?> >Mtech</option>
  </select>
		</td>
		<td>Stream</td>
		<td>
			 <select name="Stream" id="Stream">
    <option value="Comuter science" <?php if($result[stream]=='Computer science') echo'selected="selected"'; ?> >Computer science</option>
    <option value="Mechanical" <?php if($result[stream]=='Mechanical') echo'selected="selected"'; ?> >Mechanical</option>
    <option value="Electrical" <?php if($result[stream]=='Electrical') echo'selected="selected"'; ?> >Electrical</option>
  </select>
		</td>
	</tr>
	<tr>
		<td>Father's Name</td>
		<td><input type="TEXT" name="FathersName" value="<?php echo $result['fname'];?>"></td>
		<td>Occupation</td>
		<td>
		<select name="FOccupation" id="Occupation" >
    <option value="Government Employee" <?php if($result[foccupation]=='Government Employee') echo'selected="selected"'; ?> >Government Employee</option>
    <option value="Private Employee" <?php if($result[foccupation]=='Private Employee') echo'selected="selected"'; ?> >Private Employee</option>
    <option value="Self Employee" <?php if($result[foccupation]=='Self Employee') echo'selected="selected"'; ?> >Self Employee</option>
    <option value="Bussiness" <?php if($result[foccupation]=='Bussiness') echo'selected="selected"'; ?> >Bussiness</option>
    <option value="Others" <?php if($result[foccupation]=='Others') echo'selected="selected"'; ?> >Others</option>
  </select>	
		</td>
	</tr>
	<tr>
		<td>Mother's Name</td>
		<td><input type="TEXT" name="MothersName" value="<?php echo $result['mname'];?>"></td>
		<td>Occupation</td>
		<td>
		<select name="MOccupation" id="Occupation">
    <option value="Government Employee" <?php if($result[moccupation]=='Government Employee') echo'selected="selected"'; ?> >Government Employee</option>
    <option value="Private Employee" <?php if($result[moccupation]=='Private Employee') echo'selected="selected"'; ?> >Private Employee</option>
    <option value="Self Employee" <?php if($result[moccupation]=='Self Employee') echo'selected="selected"'; ?> >Self Employee</option>
    <option value="Bussiness" <?php if($result[moccupation]=='Bussiness') echo'selected="selected"'; ?> >Bussiness</option>
    <option value="Homemaker" <?php if($result[moccupation]=='Homemaker') echo'selected="selected"'; ?> >Homemaker</option>
    <option value="Others" <?php if($result[moccupation]=='Others') echo'selected="selected"'; ?> >Others</option>
  </select>	
		</td>
	</tr>
	<tr>
		<td>Gender</td>
		<td><input type="radio" id="male" name="gender" value="male" <?php if($result[gender]=='male') echo'checked="checked"'; ?> >
<label for="male">Male</label><br>
<input type="radio" id="female" name="gender" value="female"  <?php if($result[gender]=='female') echo'checked="checked"'; ?> >
<label for="female">Female</label><br>
<input type="radio" id="other" name="gender" value="other"  <?php if($result[gender]=='other') echo'checked="checked"'; ?> >
<label for="other">Other</label></td>
		<td>Address</td>
		<td>
			<input type="TEXT" name="Address" value="<?php echo $result['address'];?>">
		</td>
	</tr>
	<tr>
		<td>Mobile</td>
		<td><input type="TEXT" name="mobile" value="<?php echo $result['mobile'];?>"></td>
		<td>Email</td>
		<td><input type="TEXT" name="email" value="<?php echo $result['email'];?>"></td>
	</tr>
	<tr>
		<td>Parent's Mobile</td>
		<td><input type="TEXT" name="ParentsMobile" value="<?php echo $result['pmobile'];?>"></td>
		<td> Parent's Email</td>
		<td><input type="TEXT" name="ParentsEmail" value="<?php echo $result['pemail'];?>"></td>
	</tr>
	<tr>
		<td>Nationality</td>
		<td><input type="TEXT" name="Nationality" value="<?php echo $result['nationality'];?>"></td>
		<td>Blood Group</td>
		<td>
			<select name="BloodGroup" id="BloodGroup">
    <option value="A+"  <?php if($result[bloodgroup]=='A+') echo'selected="selected"'; ?> >A+</option>
    <option value="B+"  <?php if($result[bloodgroup]=='B+') echo'selected="selected"'; ?> >B+</option>
    <option value="AB+" <?php if($result[bloodgroup]=='AB+') echo'selected="selected"'; ?> >AB+</option>
    <option value="O+"  <?php if($result[bloodgroup]=='O+') echo'selected="selected"'; ?> >O+</option>
    <option value="A-"  <?php if($result[bloodgroup]=='A-') echo'selected="selected"'; ?> >A-</option>
    <option value="B-"  <?php if($result[bloodgroup]=='B-') echo'selected="selected"'; ?> >B-</option>
     <option value="AB-" <?php if($result[bloodgroup]=='AB-') echo'selected="selected"'; ?> >AB-</option>
    <option value="O-"  <?php if($result[bloodgroup]=='O-') echo'selected="selected"'; ?> >O-</option>
  </select>	
		</td>
	</tr>
	<tr>
		<td>Student Image</td>
		<td><input type="file" name="uploadfile" value="<?php echo $result['simage'];?>" ></td>
		<td>
			Physical Disability if any
		</td>
		<td>
			<input type="TEXT" name="PhysicalDisability" value="<?php echo $result['pdisability'];?>">
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
			<input type="TEXT" name="Edx" value="<?php echo $result['yopx'];?>">
		</td>
	</tr>
	<tr>
		<td>
			<input type="TEXT" placeholder="Board Name" name="Bnamex" value="<?php echo $result['bnx'];?>">
		</td>
		<td>
			<input type="TEXT" placeholder="School Name" name="Snamex" value="<?php echo $result['scnx'];?>">
		</td>
		<td>
			<input type="TEXT" placeholder="Total Percentage" name="Tpercentx" value="<?php echo $result['tpx'];?>">
		</td>
		<td>
			<input type="TEXT" placeholder="Percentage you got" name="Percentx" value="<?php echo $result['pygx'];?>">
		</td>
	</tr>
	
	<tr>
		<td>
			<input type="TEXT" placeholder="Marks in English" name="Ex" value="<?php echo $result['miex'];?>">
		</td>
		<td>
			<input type="TEXT" placeholder="Marks in Maths" name="Mx" value="<?php echo $result['mimx'];?>">
		</td>
		<td>
			<input type="TEXT" placeholder="Marks in Physics" name="Px" value="<?php echo $result['mipx'];?>">
		</td>
		<td>
			<input type="TEXT" placeholder="Marks in Chemistry" name="Cx" value="<?php echo $result['micx'];?>">
		</td>
	</tr>
	<tr>
		<td>
			<input type="TEXT" placeholder="Marks in Biology" name="Bx" value="<?php echo $result['mibx'];?>">
		</td>
		<td>
			<input type="TEXT" placeholder="Marks in Computer" name="Compx" value="<?php echo $result['micompx'];?>">
		</td>
		<td>
			<input type="TEXT" placeholder="Marks in Social Studies" name="Ssx" value="<?php echo $result['miscx'];?>">
		</td>
		<td>
			<input type="TEXT" placeholder="Marks in Second Language" name="Sx" value="<?php echo $result['mislx'];?>">
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
			<input type="TEXT" name="Edxii" value="<?php echo $result['yopxii'];?>">
		</td>
	</tr>
	<tr>
		<td>
			<input type="TEXT" placeholder="Board Name" name="Bnamexii" value="<?php echo $result['bnxii'];?>">
		</td>
		<td>
			<input type="TEXT" placeholder="School Name" name="Snamexii" value="<?php echo $result['ssnxii'];?>">
		</td>
		<td>
			<input type="TEXT" placeholder="Total Percentage" name="Tpercentxii" value="<?php echo $result['tpxii'];?>">
		</td>
		<td>
			<input type="TEXT" placeholder="Percentage you got" name="Percentxii" value="<?php echo $result['pygxii'];?>">
		</td>
	</tr>
	
	<tr>
		<td>
			<input type="TEXT" placeholder="Marks in English" name="Exii" value="<?php echo $result['miexii'];?>">
		</td>
		<td>
			<input type="TEXT" placeholder="Marks in Maths" name="Mxii" value="<?php echo $result['mimxii'];?>">
		</td>
		<td>
			<input type="TEXT" placeholder="Marks in Physics" name="Pxii" value="<?php echo $result['mipxii'];?>">
		</td>
		<td>
			<input type="TEXT" placeholder="Marks in Chemistry" name="Cxii" value="<?php echo $result['michemxii'];?>">
		</td>
	</tr>
	<tr>
		<td>
			<input type="TEXT" placeholder="Marks in Second Language" name="Slxii" value="<?php echo $result['mislxii'];?>">
		</td>
		<td>
			<input type="TEXT" placeholder="Marks in Computer" name="Compxii" value="<?php echo $result['micxii'];?>">
		</td>
		<td>
			
		</td>
		<td>
		
		</td>
	</tr>
	<tr>
		<td>
			Extra Cirricular Activity if any
		</td>
		<td>
			<input type="TEXT" name="Eactivity" value="<?php echo $result['ecaxii'];?>">
		</td>
		<td>
			Hobbies
		</td>
		<td>
			<input type="TEXT" name="Hb" value="<?php echo $result['hobbies'];?>">
		</td>
	</tr>
	<tr>
		<td>
			
		</td>
		<td>
			
		</td>
		<td>
			<input type="submit" name="submit" value="UPDATE">
		</td>
		<td>
			
		</td>
	</tr>
<?php
	}
	?>

</table>
</form>
<?php

if($_GET['submit'])
{
	$sid=$_GET['student_id'];
	$snm=$_GET['sname'];
	$fn=$_GET['FathersName'];
	$co=$_GET['Course'];
	$st=$_GET['Stream'];
	$fo=$_GET['FOccupation'];
	$mn=$_GET['MothersName'];
	$mo=$_GET['MOccupation'];
	$ge=$_GET['gender'];
	$ad=$_GET['Address'];
	$mb=$_GET['mobile'];
	$em=$_GET['email'];
	$pmb=$_GET['ParentsMobile'];
	$pem=$_GET['ParentsEmail'];
	$na=$_GET['Nationality'];
	$bg=$_GET['BloodGroup'];
	$pd=$_GET['PhysicalDisability'];
	$bnx=$_GET['Bnamex'];
	$snx=$_GET['Snamex'];
	$tpx=$_GET['Tpercentx'];
	$pygx=$_GET['Percentx'];
	$miex=$_GET['Ex'];
	$mimx=$_GET['Mx'];
	$mipx=$_GET['Px'];
	$micx=$_GET['Cx'];
	$mibx=$_GET['Bx'];
	$micompx=$_GET['Compx'];
	$miscx=$_GET['Ssx'];
	$mislx=$_GET['Sx'];
	$yopx=$_GET['Edx'];
	$bnxii=$_GET['Bnamexii'];
	$ssnxii=$_GET['Snamexii'];
	$tpxii=$_GET['Tpercentxii'];
	$pygxii=$_GET['Percentxii'];
	$miexii=$_GET['Exii'];
	$mimxii=$_GET['Mxii'];
	$mipxii=$_GET['Pxii'];
	$michemxii=$_GET['Cxii'];
	$mislxii=$_GET['Slxii'];
	$micxii=$_GET['Compxii'];
	$ecaxii=$_GET['Eactivity'];
	$hobbies=$_GET['Hb'];


	$query="update admission set sname='$snm', fname='$fn' , course='$co' , stream='$st' , foccupation='$fo' , mname='$mn' , moccupation='$mo' , gender='$ge' , address='$ad' , mobile='$mb' , email='$em' , pmobile='$pmb' , pemail='$pem' , nationality='$na', bloodgroup='$bg' , pdisability='$pd' , bnx='$bnx' , scnx='$snx' , tpx='$tpx' , pygx='$pygx' , miex='$miex' , mimx='$mimx' , mipx='$mipx' , micx='$micx' , mibx='$mibx' , micompx='$micompx' , miscx='$miscx' , mislx='$mislx' , yopx='$yopx' , bnxii='$bnxii' , ssnxii='$ssnxii' , tpxii='$tpxii' , pygxii='$pygxii' , miexii='$miexii' , mimxii='$mimxii' , mipxii='$mipxii' , michemxii='$michemxii' , mislxii='$mislxii' , micxii='$micxii' , ecaxii='$ecaxii' , hobbies='$hobbies'   where student_id='$sid'";
	$data=mysqli_query($conn,$query);
	if($data)
	{
		echo"<font color='green'>Record updated Successfully <a href= displaystudent.php =>Check updated list</a>";
	}
	else
	{
		echo "<font color='red'>Record not updated";
	}
}
else
{
	echo "<font color='blue'> Click on update button to save the changes";

}
?>
<br>
<br>
<br>
<br>
</center>
<footer class="footer-distributed">
	<div class="footer-left">
		<img src="collegelogo1.jpg">
		<h3>Online<span> Admission System</span></h3>
		<p class="footer-links">
			<a href="#">Home</a>
			|
			<a href="#">Gallery</a>
			|
			<a href="#">About</a>
			|
			<a href="#">Contact</a>
		</p>
		<p class="footer-company-name">© 2020 Online Admission System</p>
	</div>
	<div class="footer-center">
		<div>
			<i class="fa fa-map-marker"></i>
			<p><span>B-20/120 Kolkata</span>
			West Bengal</p>
		</div>

		<div>
			<i class="fa fa-phone"></i>
			<p>+91 6290139946</p>
		</div>

		<div>
			<i class="fa fa-envelope"></i>
			<p><a href="#">soubhu28@gmail.com</a></p>
		</div>
	</div>
	<div class="footer-right">
		<p class="footer-company-about">
			<span>About Online Admission System</span>
		Online Admission System is a web portal of admission for computerization of all pre and post admission activities of an Institution. The portal supports various modern technologies such as – Online Payment Gateway, auto SMS, and auto Email for student admission application and confirmation of admission.</p>
		<div class="footer-icons">
			<a href="#"><i class="fab fa-facebook-f"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-linkedin-in"></i></a>
			<a href="#"><i class="fab fa-youtube"></i></a>
		</div>
	</div>
</footer>
</body>
</html>