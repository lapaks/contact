<?php
session_start();
$_SESSION['link']=$_GET['id'];
?>
<?php
if (!isset($_SESSION['link'])): ?>
<?php header('Location: index.php');?>
<?php endif?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>All Contacts</title>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css" media="screen" type="text/css" />
<link rel="stylesheet" href="css/fontface.css" type="text/css" />
<link rel="stylesheet" href="css/phonebook.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-1.10.2.js" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/jquery.placeholder.js"></script>
</head>
<header>
  <?php include 'header.php';?>
</header>
<body class="white-back">
<div class="container">
<div class="main clearfix">
  <div class="filter"> <a class='list-group-item'>
    <form name="grp-name" action="allnew.php" method="post">
      <h4 class='list-group-item-heading'>
      
<?php include 'connection.php';?>
<?php
$sql="SELECT * from grp_name";
$result=mysqli_query($con,$sql);
echo "<select required name='grp-name', id='grp-name' class='form-control filter-select' onchange='this.form.submit()'>";
echo "<option disabled>CHOOSE A GROUP</option>";
echo "<option>ALL</option>";
while ($row = mysqli_fetch_array($result)) {?>

	<option <?php if ($row['grp_name']==$_GET['id']){ ?> selected="selected"<?php } ?>>
    <?php echo $row['grp_name'];?></option>	
	 <?php } ?>

</select>
          <button class='btn btn-primary pull-right hidden-xs' type='submit' onclick="prnt_page()"><i class="fa fa-print"></i>Print</button>

      </h4>
    </form>
    </a>

     </div>
<script>
function prnt_page() {
    window.print();
}
</script>
 <h4><?php echo 'Showing '.$_GET['id'].'';?></h4>
    <?php include 'connection.php';?>
    <?php 
	$sql="SELECT * FROM $tbl_name WHERE del_flag is NULL";
$result=mysqli_query($con,$sql);
 echo "<div class='table-responsive'>
<table class='table table-condensed table-hover'>
	<th>First Name</th>
    <th>Last Name</th>
    <th>Address</th>
    <th>Mobile</th>
    <th>Phone1</th>
    <th>Phone2</th>
    <th>Phone3</th>
    <th>Email</th>
    <th>Comment</th>
    <th>Group</th>
    <th>Reference</th>
 "; 

 while($info = mysqli_fetch_row($result)){
  echo
  ("
    <tr>
    	<td>$info[1]</td>
        <td>$info[2]</td>
        <td>$info[3]</td>
        <td>$info[4]</td>
        <td>$info[5]</td>
        <td>$info[6]</td>
        <td>$info[7]</td>
        <td>$info[8]</td>
        <td>$info[9]</td>
        <td>$info[10]</td>
        <td>$info[11]</td>
    </tr>
     
  ");
}
?>
    </table>
  </div>
</div>
</div>
</body>
<footer>
<?php include 'footer.php';?>
</footer>
</html>