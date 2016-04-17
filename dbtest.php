<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css" media="screen" type="text/css" />
<title>Untitled Document</title>
</head>

<body>
<?php
$con = mysqli_connect("localhost","pattake_pattake","jhg(*&LKHJG#2","pattake_pattake1");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="select * from phone_book";
if ($result=mysqli_query($con,$sql)){
	while ($row=mysqli_fetch_row($result))
	{
		echo ("
		<table class='table table-condensed table-hover'>
		<th>ID</th>
		<th>FNAME</th>
		<th>LNAME</th>
		<tr>
		<td>$row[0]</td>
		<td>$row[1]</td>
		<td>$row[2]</td>
		
		</tr>
		</table>
		");
		}
	}
	mysqli_close($con);
?>


</body>
</html>