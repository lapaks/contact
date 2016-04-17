<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php include 'connection.php';?>
<?php
function showGrp() {
include 'connection.php';
$sql="SELECT * from grp_name";
$result=mysqli_query($con,$sql);
echo "<select required name='grp-name', id='grp-name' class='form-control filter-select' onchange='this.form.submit()'>";
echo "<option disabled>CHOOSE A GROUP</option>";
echo "<option>ALL</option>";
while ($row = mysqli_fetch_array($result)) {?>

	<option><?php echo $row['grp_name'];?></option>	
	 <?php } 
	 
}
	 ?>

</select>
<div style="border:1px solid green;">
<?php 
showGrp();
?>
</div>
</body>
</html>