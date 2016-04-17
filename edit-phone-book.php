<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css" media="screen" type="text/css" />
<link rel="stylesheet" href="css/fontface.css" type="text/css" />
<link rel="stylesheet" href='css/rotating-card.css'  />
<link rel="stylesheet" href="css/phonebook.css">
<script type="text/javascript" src="pjax/pjax-standalone.js"></script>
<script type="text/javascript" src="js/phonebook.js"></script>
<script type="text/javascript" src="js/jquery-1.10.2.js" ></script> 
<?php include 'connection.php';?>
<?php 
 $sql="SELECT * FROM $tbl_name WHERE ID='" . $_GET['id'] . "'";
$result=mysqli_query($con,$sql);
while($info = mysqli_fetch_row($result)){
  echo("
<form class='form-group' name='edit-phone-book' method='post' action='update-phone-book.php'>
  <input class='form-control hidden-id' type='text' name='id' value='$info[0]'>
  <div class='panel-heading add-border clearfix'>
    <h3 class='panel-title pull-left'></h3>
    <div class='btn-group pull-right visible-xs'> </div>
    <a class='btn btn-primary btn-cancel pull-right btn-in-header hidden-xs' href='contact.php?id=$info[0]'> <i class='fa fa-times'></i> <span>Cancel</span> </a>
    <button class='btn btn-primary pull-right' type='submit'><i class='fa fa-pencil-square-o fa-locate'></i>Update</button>
    </a> </div>
  <a class='list-group-item'> <img src='' class='img-rounded pull-left'>
    <label>Name</label>
    <h4 class='list-group-item-heading'>
      <input class='form-control form-input' autocomplete='off' placeholder='First Name' name='fname' required='required' value='$info[1]' />
      <input class='form-control form-input' autocomplete='off' placeholder='Last Name' name='lname'  required='required' value='$info[2]'/>
    </h4>
  </a>
  <a class='list-group-item'>
    <label>Address</label>
    <h4 class='list-group-item-heading'><i class='fa fa-location-arrow fa-position'></i>
      <input class='form-control  form-input' placeholder='Address - City or Area' autocomplete='off' name='address'  required='required' value='$info[3]'/>
    </h4>
  </a>
  <a class='list-group-item'>
  <label>Mobile</label>
  <h4 class='list-group-item-heading'><i class='fa fa-mobile fa-position'></i>
    <input class='form-control form-input' placeholder='Mobile' autocomplete='off' name='mobile' value='$info[4]'/>
  </h4>
  </a> <a class='list-group-item'>
  <label>Phone</label>
  <h4 class='list-group-item-heading'> <i class='fa fa-phone fa-position'></i>
    <input class='form-control form-input' autocomplete='off' name='phone1' placeholder='Phone1' value='$info[5]'/>
    <input class='form-control form-input' autocomplete='off' name='phone2' placeholder='Phone2' value='$info[6]'/>
    <input class='form-control form-input' autocomplete='off' name='phone3' placeholder='Phone3' value='$info[7]'/>
  </h4>
  </a> <a class='list-group-item'>
  <label>Email</label>
  <h4 class='list-group-item-heading'><i class='fa fa-envelope-o fa-position'></i>
    <input class='form-control form-input' placeholder='Email' autocomplete='off' name='email' value='$info[8]'/>
  </h4>
  </a>
  <a class='list-group-item'>
    <label>Comments</label>
    <h4 class='list-group-item-heading'>
      <input class='form-control form-input' placeholder='Comments' autocomplete='off' name='cmt' value='$info[9]'/></h4>
  </a>
  <a class='list-group-item'>
    <h4 class='list-group-item-heading'>	
  ");
include 'connection.php';
$sql="SELECT * from grp_name";
$result=mysqli_query($con,$sql);
echo "<select required name='grp-name', id='grp-name' class='form-control filter-select'>";
echo "<option disabled>CHOOSE A GROUP</option>";
while ($row = mysqli_fetch_array($result)) {?>

	<option <?php if ($row[1]==$info[10]){ ?> selected="selected"<?php } ?>>
    <?php echo $row[1];?></option>	
	 <?php } 

	echo ("
	</select>
</h4>
</a>
	<a class='list-group-item'>
	    <label>Reference</label>
    <h4 class='list-group-item-heading'>
	   <input class='form-control form-input' type='text' autocomplete='off' placeholder='Reference'  required='required' name='ref' value='$info[11]'/></h4>
  </a>
</form>
<div class='panel-footer add-border clearfix'>
  <h3 class='panel-title pull-left'></h3>
  <div class='btn-group pull-right visible-xs'> </div>
  <form name='del-form' method='post' action='delete.php'>
    <input class='form-control hidden-id' type='text' name='id' value='$info[0]'>
    <a class='hidden-xs'>
    <button class='btn btn-primary btn-del pull-right hidden-xs' type='submit'><i class='fa fa-trash-o fa-locate'></i>Delete</button>
    </a>
  </form>
</div>

");
 }
?>
