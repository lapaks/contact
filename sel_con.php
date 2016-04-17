<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Ajax and PHP</title>
</head>
<body>
<table>
<?php
include 'connection.php';
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: Sat, 14 Jan 2012 01:00:00 GMT");



$query = "SELECT * FROM $tbl_usr";

$result = mysqli_query($con,$query);

if($result){
	while($row = mysqli_fetch_array($result)){
		echo "<tr><td style='width:100px;'>Name:</td><td>".$row["grp_name"]."</td></tr>";
	}
}
mysql_close($conn);
?> 
</table>
</body>
</html>