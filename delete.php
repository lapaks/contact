<?php include 'connection.php';?>
<?php
$sql="UPDATE phone_book SET del_flag='1' where ID='".$_POST['id']."'";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
header('Location: index.php');
mysqli_close($con);
?>
