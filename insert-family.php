<?php include 'connection.php';?>
<?php 
//$dob = date('Y-m-d', strtotime($_POST['dob']));
$sql="insert into $tbl2 (fname, lname, dob, fname_spouse, lname_spouse, anniversary, relation) VALUES (
'$_POST[fname]',
'$_POST[lname]',
'$_POST[dob]',
'$_POST[fname_spouse]',
'$_POST[lname_spouse]',
'$_POST[anniversary]',
'$_POST[relation]'
)";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
header('Location: family.php');
mysqli_close($con);
?>
