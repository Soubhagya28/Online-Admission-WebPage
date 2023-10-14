<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<style type="text/css">
		body
		{
			top:0;
			left:0;
			padding:0;
			margin:0;
			height:100vh;
			width:100%;
			font-family:arial;
			background:linear-gradient(27deg, #34495e 50%, #2c3e50 50%);
		}
        .log
        {
        	position:absolute;
        	left:50%;
        	top:50%;
        	transform:translate(-50%, -50%);
        	height:390px;
        	width:400px;
        	border-radius:10px;
        	border-top-left-radius:50px;
        	border-bottom-right-radius: 50px;
        	border:1px solid #2980b9;
        }
        .log img
        {
        	height:120px;
        	width:120px;
        	position:relative;
        	left:33%;
        	margin-top:-67px;
        }
        .log .logtext
        {
        	font-size: 30px;
        	font-weight:600;
        	color:white;
        	margin-left:120px;
        	margin-top:-5px;
        	border-bottom:2px solid;
        	border-radius: 3px;
        	width:160px;

        }
        .log input
        {
        	height: 40px;
        	width: 75%;
        	margin-left:45px;
        	padding-left:10px;
        	color:white;
        	border:1px solid white;
        	border-radius: 2px;
        	font-family: verdana;
        	background: transparent;
        	border-top-left-radius: 10px;
        	border-bottom-right-radius: 10px;
        	font-size:15px;
        }
        .log input[type="password"]
        {
        	margin-top:30px;
        }
        ::placeholder
        {
        	font-size:16px;
        	color:white;
        }
        .log input:hover
        {
        	transition: .5s;
        	border: 1px solid #2980b9;
        	color: #3498db;
        }
        .log input[type="submit"]
        {
        	margin-top: 40px;
        	margin-left: 45px;
        	height: 40px;
        	width: 78.5%;
        	color: #b9c4c6;
        	font-size: 22px;
        	background: transparent;
        	border-radius: 2px;
        	border: 2px solid #2980b9;
        	cursor: pointer;
        }
        .log input[type="submit"]:hover
        {
        	transition: .5s;
        	border: 3px solid #2980b9;
        	color: white;
        	background: #2c3e50;
        }

        
        
        
	</style>
</head>
<body>
<div class="log">
	<img src="collegeimg/user.png">
	<p class="logtext">User Login</p>
	<form class="login-form">
		<input type="text" name=""placeholder="User Name">
		<input type="password" name=""placeholder="Password">
		<input type="submit" name=""value="LOGIN">
	</form>

</div>

</body>
</html>