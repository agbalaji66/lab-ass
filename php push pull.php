<?php if(isset($_GET['submit']))
 {
 $username=$_GET['uname'];
  $pass=$_GET['pass'];
$host = "localhost";
$user = "root";
$passd = "";
$db = "foodmanagement";
  //echo "good".$User;
  $conn=new mysqli($host,$user,$passd,$db);
  if($conn->connect_error)
  {
  echo"connection failed";
  }
  $sql="INSERT INTO gps(`ip`,`lat`, `long`) VALUES ('".$host1."','".$lattitude."','".$longitude."')";
  if(mysqli_query($conn,$sql))
  {
  //echo "data enter success";
  }
  else{echo"failed";}
 }
 ?>
 
 <?php 
$host="localhost";
$user="id10823184_admin";
$passd="admin";
$db="id10823184_gps";
$mysqli = new mysqli($host, $user, $passd, $db); 
$query = "SELECT * FROM gps";
 
 
echo '<table border="0" cellspacing="2" cellpadding="2" id="t01"> 
      <tr> 
          <td> <font face="Arial">Client IP</font> </td> 
          <td> <font face="Arial">latitude</font> </td> 
          <td> <font face="Arial">longitude</font> </td> 
          <td> <font face="Arial">Time Stamp</font> </td>  
      </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["ip"];
        $field2name = $row["lat"];
        $field3name = $row["long"];
        $field4name = $row["time"];
 
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
              </tr>';
    }
    $result->free();
} 
?ppppo