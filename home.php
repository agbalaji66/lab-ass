<!DOCTYPE html>
<html>
<head>
<title>home page</title>
<style>
*
{
	margin: 0;
	padding: 0;
	background-color: white;
}
header
{
	background-color: white;
	height: 100vh;
	background-size: cover;
	background-position: center;
}
.nav-bar
{
	background-color: #1023D7;
	height: 80px;
}

.tf
{
	background: none;
	float: left;
	list-style: none;
	margin: 9px;
	font-family: serif;
}
.tf h2
{
	color: white;
	background-color: #1023D7;
}

.menu
{
	background: none;
	float: right;
	list-style: none;
	margin: 20px;
}

.menu li
{
	display: inline-block;
	margin: 10px 5px;
}

.menu li a
{
	background: #fff;
	text-decoration: none;
	color: #000;
	padding: 5px 10px;
	font-family: sans-serif;
	letter-spacing: 2px;
	border: 1px solid #fff;
}
.menu li a:hover
{
	background: #fff;
	transition: .4s;
	color: #000;
 	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
</head>
<body>
<?php
if(isset($_POST['login']))
{
$uname=$_POST['uname'];
$pass=$_POST['pass'];
if($uname=="admin" && $pass=="admin")
{
	header("location:afterlogin.php");
}
else
{
	echo"<script>alert('wrong username and password');</script>";
}
}
?>

<header>
<div class="tf">
<h2>Talking Fingers</h2>
</div>

<div class="nav-bar">

<ul class="menu"> 
<li><a href="home.php">Home</a></li>
<li><a href="register.php">Sign up</a></li>
<li><a href="contact.php">Contact</a></li>
<li><a href="about.php">About </a></li>
</ul>
</div>
<center>
<form name="form1" method="post" onsubmit="return check()">
<h2>username</h2><br><input type="text" name="uname" id="uname" required><br><br>
<h2>password</h2><br><input type="text" name="pass" id="pass" required><br><br>
<input type="submit" value="LOGIN" name="login">
</form>
</center>
</header>
</body>
</html>