<?php include 'connection.php';?>
<?php 
$val=strtoupper($_POST['grpname']); 
//$dob = date('Y-m-d', strtotime($_POST['dob']));
$sql="insert into $tbl3 (grp_name) VALUES (
'$val'
)";
if (!mysqli_query($con,$sql))
  {
  die('Error: <button>Go Back</button>');
  }
header('Location: group.php');
mysqli_close($con);
?>
