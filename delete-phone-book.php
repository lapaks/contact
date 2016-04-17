<?php

//$con=mysqli_connect("localhost","pattake_pattake","jhg(*&LKHJG#2","pattake_pattake1");
$con=mysqli_connect("localhost","lapaks","pattake","lapaks");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="UPDATE phone_book SET del_flag='1' where ID='".$_POST['id']."'";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
header('Location: index.php');
mysqli_close($con);
?>
