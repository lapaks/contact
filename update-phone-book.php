<?php include 'connection.php';?>
<?php
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="UPDATE phone_book SET 
fname='".$_POST['fname']."', 
lname='".$_POST['lname']."', 
address='".$_POST['address']."', 
mobile='".$_POST['mobile']."' ,
phone1='".$_POST['phone1']."' ,
phone2='".$_POST['phone2']."' ,
phone3='".$_POST['phone3']."' ,
email='".$_POST['email']."' ,
ref='".$_POST['ref']."' ,
grp='".$_POST['grp']."' ,
comment='".$_POST['cmt']."' 
where ID='".$_POST['id']."'";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
header('Location: index.php');
mysqli_close($con);
?>