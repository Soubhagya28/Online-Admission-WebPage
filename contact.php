<?php
include("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link rel="stylesheet" type="text/css" href="footerstyle.css">
<link rel="stylesheet" type="text/css" href="c.css">
<link rel="stylesheet" type="text/css" href="contactfile.css">
<link rel="stylesheet" type="text/css" href="iconfile.css">
<html>
<head>
	<title></title>
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
.icons a
{
	text-decoration:none;;
	text-transform: uppercase;
	padding: 10px;
	font-size: 22px;
	font-family: 'Oswald', sans-serif;
	margin: 2px;
	text-align: right;
	border-radius: 0px 50px 50px 0px;
	transform: translate(-150px, 0px);
	transition: all 0.5s;
}
.icons a i
{
	margin-left: 25px;
	background-color: white;
	height: 40px;
	width: 40px;
	color: black;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	transition: all 0.5s;
}
.icons a i.fa-facebook-f
{
	color:#2c80d3;
}
.icons a i.fa-youtube 
{
	color:#fa0910;
}
.icons a i.fa-twitter
{
	color:#53c5ff;
}
.icons
{
	position:fixed;
	top:30%;
	left:0%;
	width:220px;
	display:flex;
	flex-direction: column;
}
.icons a:hover
{
	transform:translate(0px, 0px);
}
.icons a:hover i
{
	transform: rotate(360deg);
}
.facebook
{
	background-color:#2c80d3;
	color:white;
}
.youtube
{
	background-color:#fa0910;
	color:white;
}
.twitter
{
	background-color:#53c5ff;
	color:white;
}

	</style>
</head>
<body>
	<div class="icons">
		<a href="#" class="facebook">facebook<i class="fab fa-facebook-f"></i></a>
		<a href="#" class="youtube">youtube<i class="fab fa-youtube"></i></a>
		<a href="#" class="twitter">twitter<i class="fab fa-twitter"></i></a>
	</div>

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

		<div class="mycontactstyle">
			<h1>Contact with Us</h1>
			<p>We would love to respond to your queries and help you.Feel free to get in touch with us.
			</p>
			<div class="contact-box">
				<div class="contact-left">
					<h3>Send your request</h3>
					<form action="" method="GET">
						<div class="input-row">
							<div class="input-group">
								<label>Name</label>
								<input type="text" placeholder="Enter your name" name="uname">
							</div>
							<div class="input-group">
								<label>Mobile</label>
								<input type="text" placeholder="Enter mobile number" name="mobile">
							</div>
						</div>
						<div class="input-row">
							<div class="input-group">
								<label>Email</label>
								<input type="text" placeholder="Enter your Email" name="email">
							</div>
							<div class="input-group">
								<label>Subject</label>
								<input type="text" placeholder="Enter a subject" name="subject">
							</div>
						</div>
						<label>Message</label>
						<textarea rows="5" placeholder="Your Message" name="message"></textarea>
						<input type="submit" class="mybutton" name="submit" value="SUBMIT">
					</form>
					<?php
					if($_GET['submit'])
					{
					$nm=$_GET['uname'];
					$mb=$_GET['mobile'];
					$em=$_GET['email'];
					$sb=$_GET['subject'];
					$me=$_GET['message'];
					$query="insert into enquirytable (name,mobile,email,subject,message) values ('$nm','$mb','$em', '$sb','$me')";
					$data=mysqli_query($conn,$query);
					if($data)
					{
						echo"Data insert into database";
					}
					else
					{
						echo (mysqli_error ($conn));
						echo $nm;
						echo $mb;
						echo $sb;
						echo $me;

					}
				}
					
					?>
					
				</div>
				<div class="contact-right">
					<h3>Our office address</h3>
					<table>
						<tr>
							<td>Email</td>
								<td>soubh20@gmail.com</td>
							</tr>
							<tr>
								<td>Mobile</td>
								<td>+916290139946</td>
							</tr>
							<tr>
								<td>Address</td>
								<td>A-10/87 Kolkata Saltlake<br>West Bengal -741235</td>
							</tr>
						</table>
				</div>
			</div>
		</div>


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