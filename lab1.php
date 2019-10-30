<html>
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
$sql="SELECT * FROM login";
if($result=$conn->query($sql))
{
while($row=$result->fetch_assoc())
{
$name=$row["user"];
$pss=$row["pass"];
}
echo ("name=".$name);
echo "pass=".$pss;
if($uname=="admin" && $pass=="admin")
{
	header("location:home.php");
}
}
else{echo"thuuu";}
}

?>
