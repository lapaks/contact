<?php include 'connection.php';?>
<?php 
$val=$_POST['id'];
$sql="UPDATE $tbl_name SET fav=1 where ID=$val";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
header('Location:index.php');
mysqli_close($con);
?>
