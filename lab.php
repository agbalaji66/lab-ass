<html>
<style>
</style>
<body>
<form method=post>
<h2>User Name</h2>
<input type=text name=uname id=uname></input>
<h2>Password</h2>
<input type=text name=pass id=pass></input>
<input type=submit name=submit id=submit></input>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$host="localhost";
$user="root";
$pws="";
$db="test";
$conn=new mysqli($host,$user,$pws,$db);
if($conn->connect_error)
{
echo"error";
}
$sql="INSERT INTO login(`user`,`pass`) VALUES('".$uname."','".$pass."')";
if(mysqli_query($conn,$sql))
{
echo("inserted");
if($uname=="admin" && $pass=="admin")
{
	header("location:login.php");
}
}
else
{
echo "thu";
}
}
?>
