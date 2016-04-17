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

 

?>