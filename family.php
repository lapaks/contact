<?php
session_start();?>
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

<body>
<div class="container wrapper">
  <div class="main clearfix">
    <div class="add-family col-sm-4">
      <form class='form-group' name='edit-phone-book' method='post' action='insert-family.php'>
        <input class='form-control hidden-id' type='text' name='id' value='$info[0]'>
        <div class='panel-heading add-border clearfix'>
          <h3 class='panel-title pull-left'>
            <label>Add Family Members</label>
          </h3>
          <div class='btn-group pull-right visible-xs'> </div>
          <a class='btn btn-primary btn-cancel pull-right btn-in-header hidden' href='contact.php?id=$info[0]'> <i class='fa fa-times'></i> <span>Cancel</span> </a>
          <button class='btn btn-primary pull-right hidden' type='submit'><i class='fa fa-pencil-square-o fa-locate'></i>Update</button>
          </a> </div>
        <a class='list-group-item'>
        <label>Name</label>
        <h4 class='list-group-item-heading'>
          <input class='form-control' autocomplete='off' placeholder='First Name' name='fname' required='required' value='' />
          <input class='form-control' autocomplete='off' placeholder='Last Name' name='lname'  required='required' value=''/>
        </h4>
        </a> <a class='list-group-item'>
        <label>Date of Birth</label>
        <h4 class='list-group-item-heading'>
          <input class='form-control' type="date" placeholder='Date of Birth' autocomplete='off' name='dob'  required='required' value=''/>
        </h4>
        </a> <a class='list-group-item'>
        <label>Spouse</label>
        <h4 class='list-group-item-heading'>
          <input class='form-control' placeholder='First Name' autocomplete='off' name='fname_spouse' value=''/>
          <input class='form-control' placeholder='Last Name' autocomplete='off' name='lname_spouse' value=''/>
        </h4>
        </a><a class='list-group-item'>
        <label>Anniversary</label>
        <h4 class='list-group-item-heading'>
          <input class='form-control' type="date" placeholder='Anniversary' autocomplete='off' name='anniversary' value=''/>
        </h4>
        </a><a class='list-group-item'>
        <label>Relation</label>
        <h4 class='list-group-item-heading'>
          <select required class='form-control ' name='relation'>
            <option disabled selected>CHOOSE RELATION</option>
            <option>FATHER</option>
            <option>MOTHER</option>
            <option>BROTHER</option>
            <option>SISTER</option>
            <option>SON</option>
            <option>DAUGHTER</option>
            <option>SPOUSE</option>
            <option>COUSIN</option>
            <option>NIECE</option>
            <option>NEPHEW</option>
            <option>UNCLE</option>
            <option>AUNT</option>
            <option>IN LAWS</option>
          </select>
        </h4>
        </a>
        <div class='panel-footer clearfix'>
          <h3 class='panel-title pull-left'></h3>
          <div class='btn-group pull-right visible-xs'> </div>
          <a class=''>
          <button class='btn btn-primary pull-right btn-add' type='submit'><i class='fa fa-pencil-square-o fa-locate'></i>Add</button>
          </a> </div>
      </form>
    </div>
    <div class="visible-xs gap"></div>
    <!--end of add-family --> 
    <!--start of family-details -->
    <div class="family-details col-sm-8">
      <?php include 'connection.php';?>
      <?php 
	
	$sql="SELECT * FROM $tbl2 order by dob ASC";
$result=mysqli_query($con,$sql);

$num_results = mysqli_num_rows($result); 
if ($num_results <=0){ 
echo '<label>No Family Memebers Added</label>'; 
}else{ 
 echo "
 <div class='panel-heading add-border clearfix'>
            <h3 class='panel-title pull-left'>
              <label>Family Members</label>
            </h3>
            <div class='btn-group pull-right visible-xs'></div>
            </div>
 <div class='table-responsive'>
<table class='table table-hover tbl-margin full-border'>
	<th>Name</th>
    <th>DOB</th>
    <th>Spouse</th>
    <th>Anniversary</th>
    <th>Relation</th>
 "; 

 while($info = mysqli_fetch_row($result)){
$newDob = date("m-d-Y", strtotime($info[3]));

if ($info[7]=="0000-00-00"){
	$newAnniversary="-";
}
else {
$newAnniversary = date("m-d-Y", strtotime($info[7]));
	}
  echo
  ("
    <tr>
    	<td>$info[1] $info[2]</td>
        <td>$newDob</td>
        <td>$info[5] $info[6]</td>
        <td>$newAnniversary</td>
        <td>$info[8]</td>
    </tr>
     
  ");

}


}
?>
      </table>
    </div>
    <div class="visible-xs gap"></div>
    
    <!--end of family-details --> 
  </div>
</div>
</body>
<footer>
  <script src="js/bootstrap.min.js"></script>
</footer>
</html>