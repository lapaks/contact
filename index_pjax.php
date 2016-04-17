<!DOCTYPE html>
<html dir="ltr" lang="en-GB">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css" media="screen" type="text/css" />
<link rel="stylesheet" href="css/fontface.css" type="text/css" />
<link rel="stylesheet" href="css/phonebook.css">
<script type="text/javascript" src="pjax/pjax-standalone.js"></script>
<script type="text/javascript" src="js/jquery-1.10.2.js" ></script> 
<title>Phone Book</title>
</head>
<header>
<?php include 'header.php';?>
</header>
<body>
<div class="container wrapper">
  <div class="main clearfix">
    <div class="col-sm-4 left-pannel">
      <input type="text" id="filterfield" class="inputs form-control" placeholder="Search Name, Address, Group"/>
      <a class="btn btn-primary btn-block" href="add.php" > <i class="fa fa-user-plus"></i> <span>Add New</span> </a>
      <div id="tab">
        <li id="ta"></li>
      </div>
    </div>
    <div class="col-sm-4 right-pannel">
      <div id="content">
        <div>
<?php include 'connection.php';?>
<?php 
		  $sql="SELECT * FROM $tbl_name WHERE ID='1'";
		  if($result=mysqli_query($con,$sql)){
			   while($info = mysqli_fetch_row($result))
			   {
 echo
  ("
  
<div class='panel-heading add-border clearfix'>
  <h3 class='panel-title pull-left'></h3>
  <div class='btn-group pull-right visible-xs'> <a class='btn btn-primary' href='edit-phone-book.php' data-toggle='modal' data-target='#editModal'> <i class='fa fa-pencil'></i>
    <p><span>Edit</span></p>
    </a> </div>
  <a class='btn btn-primary pull-right hidden-xs' href='edit-phone-book.php?id=$info[0]' data-toggle='modal' data-target='#editModal'> <i class='fa fa-pencil'></i> <span>Edit</span> </a> </div>
<a class='list-group-item'> <img src='' class='img-rounded pull-left'>
  <label>Name</label>
  <h4 class='list-group-item-heading'>$info[1] $info[2] </h4>
</a>
<a class='list-group-item'>
  <label>Address</label>
  <h4 class='list-group-item-heading'><i class='fa fa-location-arrow fa-position'></i>$info[3]</h4>
</a>
<a class='list-group-item''>
<label>Mobile</label>
<h4 class='list-group-item-heading'><i class='fa fa-mobile fa-position'></i>$info[4]  &nbsp;</h4>
</a> <a class='list-group-item'>
<label>Phone</label>
<h4 class='list-group-item-heading'><i class='fa fa-phone fa-position'></i>$info[5]  &nbsp; $info[6]  &nbsp; $info[7]</h4>
</a> <a class='list-group-item'>
<label>Email</label>
<h4 class='list-group-item-heading'><i class='fa fa-envelope-o fa-position'></i>$info[8]</h4>
</a>
<a class='list-group-item'>
  <label>Comments</label>
  <h4 class='list-group-item-heading'><i class='fa fa-location-arrow fa-position'></i>$info[9]</h4>
</a>
<a class='list-group-item'>
  <label>Groups</label>
  <h4 class='list-group-item-heading'><i class='fa fa-location-arrow fa-position'></i>$info[10]</h4>
</a>
<a class='list-group-item'>
  <label>Reference</label>
  <h4 class='list-group-item-heading'>$info[11]</h4>
</a>
          
  ");
 }
}

 

?>        </div>

      </div>
    </div>
  </div>
</div>
</body>
<footer>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/phonebook.js"></script>
</footer>
</html>