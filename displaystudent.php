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
<body bgcolor="#66CCFF">
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


<?php
include("connection.php");
error_reporting(0);
$query="select * from admission";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
?>
<table border="0" bgcolor="#66CCFF">
<tr bgcolor='#0066FF'>
	<td colspan="2">Student Info</td>
	<td colspan="2">Contact Details</td>
	<td colspan="2">Personal Details</td>
	<td colspan="2">Class X Education Details</td>
	<td colspan="2">Class XII Education Details</td>

</tr>
<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
			<td> Student Id </td>
			<td> ".$result['student_id']."</td>
			<td> Address </td>
			<td> ".$result['address']."</td>
			<td> Father's Name </td>
			<td> ".$result['fname']."</td>
			<td> Board Name </td>
			<td> ".$result['bnx']."</td>
			<td> Board Name </td>
			<td> ".$result['bnxii']."</td>
			</tr>
            <tr>
			<td colspan='2' rowspan='6'><a href='$result[simage]'><img src='".$result['simage']."'height='150' width='130'></a></td>
			<td> Mobile </td>
			<td> ".$result['mobile']."</td>
			<td> Father's Occupation </td>
			<td> ".$result['foccupation']."</td>
			<td> School Name </td>
			<td> ".$result['scnx']."</td>
			<td> School Name </td>
			<td> ".$result['ssnxii']."</td>
			</tr>
			<tr>
			
			<td> Email </td>
			<td> ".$result['email']."</td>
			<td> Mother's Name </td>
			<td> ".$result['mname']."</td>
			<td> Year Of Passing </td>
			<td> ".$result['yopx']."</td>
			<td> Year Of Passing </td>
			<td> ".$result['yopxii']."</td>
			</tr>
			<tr>
			
			<td> Parent's Mobile </td>
			<td> ".$result['pmobile']."</td>
			<td> Mother's Occupation </td>
			<td> ".$result['moccupation']."</td>
			<td> Total Percentage </td>
			<td> ".$result['tpx']."</td>
			<td> Total Percentage </td>
			<td> ".$result['tpxii']."</td>
			</tr>
			<tr>
			
			<td> Parent's Email </td>
			<td> ".$result['email']."</td>
			<td> Gender </td>
			<td> ".$result['gender']."</td>
			<td>  Percentage you got </td>
			<td> ".$result['pygx']."</td>
			<td> Percentage you got </td>
			<td> ".$result['pygxii']."</td>
			</tr>
			<tr>
			
			<td></td>
			<td></td>
			<td> Nationality </td>
			<td> ".$result['nationality']."</td>
			<td>  Marks In English </td>
			<td> ".$result['miex']."</td>
			<td>  Marks In English </td>
			<td> ".$result['miexii']."</td>
			</tr>
			<tr>
			
			<td></td>
			<td></td>
			<td> Blood Group </td>
			<td> ".$result['bloodgroup']."</td>
			<td>  Marks In Maths </td>
			<td> ".$result['mimx']."</td>
			<td>  Marks In Maths </td>
			<td> ".$result['mimxii']."</td>
			</tr>
			<tr>
			<td> Student Name </td>
			<td> ".$result['sname']."</td>
			<td></td>
			<td></td>
			<td> Physical Disability If Any</td>
			<td> ".$result['pdisability']."</td>
			<td>  Marks In Computer </td>
			<td> ".$result['micompx']."</td>
			<td>  Marks In Computer </td>
			<td> ".$result['micxii']."</td>
			</tr>
			<tr>
			<td> Course </td>
			<td> ".$result['course']."</td>
			<td></td>
			<td></td>
			<td> Extra Cirricular Activity If Any</td>
			<td> ".$result['ecaxii']."</td>
			<td>  Marks In Physics </td>
			<td> ".$result['mipx']."</td>
			<td>  Marks In Physics </td>
			<td> ".$result['mipxii']."</td>
			</tr>
			<tr>
			<td> Stream </td>
			<td> ".$result['stream']."</td>
			<td></td>
			<td></td>
			<td> Hobbies</td>
			<td> ".$result['hobbies']."</td>
			<td>  Marks In Chemistry </td>
			<td> ".$result['micx']."</td>
			<td>  Marks In Chemistry </td>
			<td> ".$result['michemxii']."</td>
			</tr>
			<tr>
			<td>  </td>
			<td> </td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td>  Marks In Second Language </td>
			<td> ".$result['mislx']."</td>
			<td>  Marks In Second Language </td>
			<td> ".$result['mislxii']."</td>
			</tr>
			<tr>
			<td> </td>
			<td> </td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td>  Marks In Biology </td>
			<td> ".$result['mibx']."</td>
			<td></td>
			<td></td>
			</tr>
			<tr>
			<td>  </td>
			<td><a href='edit.php?si=$result[student_id]'>Edit</a> </td>
			<td><a href='delete.php?si=$result[student_id]'>Delete</a></td>
			<td></td>
			<td></td>
			<td></td>
			<td>  Marks In Social Studeis </td>
			<td> ".$result['miscx']."</td>
			<td></td>
			<td></td>
			</tr>




			<tr bgcolor='#0066FF'> 
			<td colspan='10'>&nbsp;</td>
			</tr>
			";
	}
}
else
{
	echo "Table has no records";
}
?>
</table>
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