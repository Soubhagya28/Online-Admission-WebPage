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
		.texteffect{
			height:140px;
			display:flex;
			justify-content:center;
			background-color:#660099;
			position:relative;
			overflow:hidden;
			filter:brightness;
		}
		.text1{
			background-color: #660099;
			color:white;
			font-size:60px;
			font-weight:bold;
			font-family:sans-serif;
			text-transform:uppercase;
			position:relative;
			user-select:none;
		}
		.text1::before{
			content:attr(data-text1);
			position:absolute;
			color:white;
			filter:blur(0.02em);
			mix-blend-mode:difference;
		}
		.gradient{
			position:absolute;
			background:linear-gradient(45deg, red, gold, lightgreen, gold, red);
			top:0;
			left:0;
			right:0;
			bottom:0;
			mix-blend-mode:multiply;
		}
		.spotlight{
			position:absolute;
			top:-100%;
			left:-100%;
			right:0;
			bottom:0;
			background:
			radial-gradient(
				circle,
				white,
				transparent 25%
				)center / 25% 25%,
				radial-gradient(
				circle,
				white,
				black 25%
				)center / 12.5%12.5%;
				animation: light 5s infinite;
				mix-blend-mode:color-dodge;
			}
			@keyframes light{
				to{
					transform:translate(50%,50%);

				}
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
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMISSION FORM</title>
</head>
<body bgcolor="99FF99">
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

<form action="" method="post" enctype="multipart/form-data">
<table bgcolor="99FF99" width="1200px">
	<tr>
		<td>&nbsp;</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>Student Id</td>
		<td><input type="TEXT" name="student_id"></td>
		<td>Name</td>
		<td><input type="TEXT" name="sname"></td>
	</tr>
	<tr>
		<td>Course</td>
		<td>
			 <select name="Course" id="Course">
    <option value="Btech">Btech</option>
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
		<td><input type="TEXT" name="FathersName"></td>
		<td>Occupation</td>
		<td>
		<select name="FOccupation" id="Occupation">
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
		<td><input type="TEXT" name="MothersName"></td>
		<td>Occupation</td>
		<td>
		<select name="MOccupation" id="Occupation">
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
		<td><input type="TEXT" name="mobile"></td>
		<td>Email</td>
		<td><input type="TEXT" name="email"></td>
	</tr>
	<tr>
		<td>Parent's Mobile</td>
		<td><input type="TEXT" name="ParentsMobile"></td>
		<td> Parent's Email</td>
		<td><input type="TEXT" name="ParentsEmail"></td>
	</tr>
	<tr>
		<td>Nationality</td>
		<td><input type="TEXT" name="Nationality"></td>
		<td>Blood Group</td>
		<td>
			<select name="BloodGroup" id="BloodGroup">
    <option value="A+">A+</option>
    <option value="B+">B+</option>
    <option value="AB+">AB+</option>
    <option value="O+">O+</option>
    <option value="A-">A-</option>
    <option value="B-">B-</option>
     <option value="AB-">AB-</option>
    <option value="O-">O-</option>
  </select>	
		</td>
	</tr>
	<tr>
		<td>Student Image</td>
		<td><input type="file" name="uploadfile" value=""></td>
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
			<input type="TEXT" name="Edx">
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
		<td>
			<input type="TEXT" placeholder="Marks in English" name="Ex">
		</td>
		<td>
			<input type="TEXT" placeholder="Marks in Maths" name="Mx">
		</td>
		<td>
			<input type="TEXT" placeholder="Marks in Physics" name="Px">
		</td>
		<td>
			<input type="TEXT" placeholder="Marks in Chemistry" name="Cx">
		</td>
	</tr>
	<tr>
		<td>
			<input type="TEXT" placeholder="Marks in Biology" name="Bx">
		</td>
		<td>
			<input type="TEXT" placeholder="Marks in Computer" name="Compx">
		</td>
		<td>
			<input type="TEXT" placeholder="Marks in Social Studies" name="Ssx">
		</td>
		<td>
			<input type="TEXT" placeholder="Marks in Second Language" name="Sx">
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
			<input type="TEXT" name="Edxii">
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
			<input type="TEXT" placeholder="Marks in English" name="Exii">
		</td>
		<td>
			<input type="TEXT" placeholder="Marks in Maths" name="Mxii">
		</td>
		<td>
			<input type="TEXT" placeholder="Marks in Physics" name="Pxii">
		</td>
		<td>
			<input type="TEXT" placeholder="Marks in Chemistry" name="Cxii">
		</td>
	</tr>
	<tr>
		<td>
			<input type="TEXT" placeholder="Marks in Second Language" name="Slxii">
		</td>
		<td>
			<input type="TEXT" placeholder="Marks in Computer" name="Compxii">
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
			<input type="TEXT" name="Eactivity">
		</td>
		<td>
			Hobbies
		</td>
		<td>
			<input type="TEXT" name="Hb">
		</td>
	</tr>
	<tr>
		<td>
			
		</td>
		<td>
			
		</td>
		<td>
			<input type="submit" name="submit" value="SUBMIT">
		</td>
		<td>
			
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
</table>
</form>

<?php
if($_POST['submit'])
{
$si=$_POST['student_id'];
$na=$_POST['sname'];
$co=$_POST['Course'];
$st=$_POST['Stream'];
$fn=$_POST['FathersName'];
$oc=$_POST['FOccupation'];
$mn=$_POST['MothersName'];
$ocu=$_POST['MOccupation'];
$ge=$_POST["gender"];
$ad=$_POST['Address'];
$mo=$_POST['mobile'];
$em=$_POST['email'];
$pm=$_POST['ParentsMobile'];
$pem=$_POST['ParentsEmail'];
$nat=$_POST['Nationality'];
$bd=$_POST['BloodGroup'];
$pdia=$_POST['PhysicalDisability'];
$edfcx=$_POST['Edx'];
$bnx=$_POST['Bnamex'];
$snx=$_POST['Snamex'];
$tpygx=$_POST['Tpercentx'];
$pygx=$_POST['Percentx'];
$enx=$_POST['Ex'];
$max=$_POST['Mx'];
$phx=$_POST['Px'];
$chx=$_POST['Cx'];
$bix=$_POST['Bx'];
$cox=$_POST['Compx'];
$ssdx=$_POST['Ssx'];
$slx=$_POST['Sx'];
$edfcxii=$_POST['Edxii'];
$bnxii=$_POST['Bnamexii'];
$snxii=$_POST['Snamexii'];
$tpygxii=$_POST['Tpercentxii'];
$pygxii=$_POST['Percentxii'];
$enxii=$_POST['Exii'];
$maxii=$_POST['Mxii'];
$phxii=$_POST['Pxii'];
$chxii=$_POST['Cxii'];
$slxii=$_POST['Slxii'];
$coxii=$_POST['Compxii'];
$ecaia=$_POST['Eactivity'];
$Hbb=$_POST['Hb'];

$filename=$_FILES["uploadfile"]["name"];
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="studentpic/".$si.".jpeg";
move_uploaded_file($tempname,$folder);



$query="insert into admission(student_id,sname,course,stream,fname,foccupation,mname,moccupation,gender,address,mobile,email,pmobile,pemail,nationality,bloodgroup,simage,pdisability,bnx,scnx,miex,mimx,mibx,micompx,yopx,tpx,pygx,mipx,micx,miscx,mislx,bnxii,ssnxii,miexii,mimxii,mislxii,micxii,yopxii,tpxii,pygxii,mipxii,michemxii,ecaxii,hobbies) values('$si','$na','$co','$st','$fn','$oc','$mn','$ocu','$ge','$ad','$mo','$em','$pm','$pem','$nat','$bd','$folder','$pdia','$bnx','$snx','$enx','$max','$bix','$cox','$edfcx','$tpygx','$pygx','$phx','$chx','$ssdx','$slx','$bnxii','$snxii','$enxii','$maxii','$slxii','$coxii','$edfcxii','$tpygxii','$pygxii','$phxii','$chxii','$ecaia','$Hbb')";
$data=mysqli_query($conn,$query);
if($data)
{
	echo "Data insert into database";
}

}
?>

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