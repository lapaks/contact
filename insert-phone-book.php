<?php include 'connection.php';?>
<?php 
$sql="insert into $tbl_name (fname, lname, address, mobile, phone1, phone2, phone3, email, ref, comment, grp) VALUES (
'$_POST[fname]',
'$_POST[lname]',
'$_POST[address]',
'$_POST[mobile]',
'$_POST[phone1]',
'$_POST[phone2]',
'$_POST[phone3]',
'$_POST[email]',
'$_POST[ref]',
'$_POST[cmt]',
'$_POST[grp]'
)";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
header('Location: index.php');
mysqli_close($con);
?>
