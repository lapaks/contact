<?php include 'connection.php';?>
<?php
ob_start();

// username and password sent from form 
$myusername=$_POST['email']; 
$mypassword=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
$sql="SELECT * FROM $tbl_usr WHERE email='$myusername' and user_password='$mypassword'";
$result=mysqli_query($con,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"

header("location:index.php");
session_start();
$_SESSION['login_user']=$myusername;
}
else {
header('Location: login.php');
session_start();
$_SESSION['views']=1;
}
mysqli_close($con);
?>
