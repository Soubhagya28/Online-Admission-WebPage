<!DOCTYPE html>

<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link rel="stylesheet" type="text/css" href="footerstyle.css">
<link rel="stylesheet" type="text/css" href="imagestyle1.css">
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

	</style>
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
			<li class="listitem"><a href="admission.php">College Admission</a></li>
			<li class="listitem"><a href="displaystudent.php">Display Student List</a></li>
			<li class="listitem"><a href="gallery.php">College Gallery</a></li>
		</ul>
	<div class="imagecontainer">
		<div class="imagebox"><div class="imgbox"><img src="collegeimg/10.jpg"></div>
        <div class="details">
        	<div class="content">
        		<h2>College Campus</h2>
        		<p>Youe text</p>
        	</div>
        </div>
	   </div>
		<div class="imagebox"><div class="imgbox"><img src="collegeimg/1.jpg"></div>
        <div class="details">
        	<div class="content">
        		<h2>College Campus</h2>
        		<p>Youe text</p>
        	</div>
        </div>
        </div>
		<div class="imagebox"><div class="imgbox"><img src="collegeimg/4.jpg"></div>
<div class="details">
        	<div class="content">
        		<h2>College Campus</h2>
        		<p>Youe text</p>
        	</div>
        </div>
	</div>
		<div class="imagebox"><div class="imgbox"><img src="collegeimg/5.jpg"></div>
<div class="details">
        	<div class="content">
        		<h2>College Campus</h2>
        		<p>Youe text</p>
        	</div>
        </div>
	</div>
		<div class="imagebox"><div class="imgbox"><img src="collegeimg/7.jpg"></div>
<div class="details">
        	<div class="content">
        		<h2>College Campus</h2>
        		<p>Youe text</p>
        	</div>
        </div>
	</div>
		<div class="imagebox"><div class="imgbox"><img src="collegeimg/2.jpg"></div>
<div class="details">
        	<div class="content">
        		<h2>College Campus</h2>
        		<p>Youe text</p>
        	</div>
        </div>
	</div>
		<div class="imagebox"><div class="imgbox"><img src="collegeimg/3.jpg"></div>
<div class="details">
        	<div class="content">
        		<h2>College Campus</h2>
        		<p>Youe text</p>
        	</div>
        </div>
	</div>
		<div class="imagebox"><div class="imgbox"><img src="collegeimg/11.jpg"></div>
<div class="details">
        	<div class="content">
        		<h2>College Campus</h2>
        		<p>Youe text</p>
        	</div>
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