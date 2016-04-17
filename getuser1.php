<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/phonebook.css">
</head>
<body>
<?php include 'connection.php';?>
	<?php
    $q = intval($_GET['r']);
    $sql="SELECT * FROM phone_book WHERE ID='".$q."'";
    $result=mysqli_query($con,$sql);
     while($info = mysqli_fetch_row($result)){
        if (!isset($_SESSION['login_user'])){
        echo ("<div class='panel-heading add-border clearfix'>
      <h3 class='panel-title pull-left'><label>Contact Details<label></h3>
      <button class='btn btn-primary pull-right hidden-xs hide-me' id='edit' data-toggle='modal' data-target='#myModal'> <i class='fa fa-pencil'></i> <span>Edit</span> </button>
      <button class='btn btn-primary pull-right hidden-xs hide-me' id='update'> <i class='fa fa-pencil'></i> <span>Update</span> </button> </div>
    <a class='list-group-item'> 
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
    </a>");
        }
        else {
                echo ("<form class='form-group' name='edit-phone-book' method='post' action='update-phone-book.php'>
      <input class='form-control hidden-id' type='text' name='id' value='$info[0]'>
      <div class='panel-heading add-border clearfix'>
        <h3 class='panel-title pull-left'></h3>
        <div class='btn-group pull-right visible-xs'> </div>
        <button class='btn btn-primary pull-right btn-border btn-in-header hidden-xs' href='contact.php?id=$info[0]'> <i class='fa fa-times fa-locate'></i>Cancel</button>
        <button class='btn btn-primary pull-right btn-border btn-in-header hidden-xs' type='submit'><i class='fa fa-pencil-square-o fa-locate'></i>Update</button>
        <button class='btn btn-primary pull-right btn-border btn-in-header hidden-xs' type='submit' formaction='fav.php?id=$info[0]'><i class='fa fa-heart fa-locate'></i>Fav</button>
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
        <label>Group</label>
        <h4 class='list-group-item-heading'>
        <select required class='form-control form-input' name='grp'>
      <option selected>$info[10]</option>    
      <option disabled>Change Group to</option>    
      <option>Family</option>
      <option>Close Friends</option>
      <option>Friends</option>
      <option>Relatives</option>
      <option>Acquaintances</option>
      <option>Utilities</option>
      <option>Hospital</option>
      <option>Others</option>
      </select></h4>
       </a>
      <a class='list-group-item'>
        <label>Reference</label>
        <h4 class='list-group-item-heading'>
           <input class='form-control form-input' type='text' autocomplete='off' placeholder='Reference'  required='required' name='ref' value='$info[11]'/></h4>
      </a>
    </form>
    <div class='panel-footer clearfix'>
      <h3 class='panel-title pull-left'></h3>
      <div class='btn-group pull-right visible-xs'> </div>
      <form name='del-form' method='post' action='delete.php'>
        <input class='form-control hidden-id' type='text' name='id' value='$info[0]'>
        <a class='hidden-xs'>
        <button class='btn btn-primary btn-del pull-right hidden-xs' type='submit'><i class='fa fa-trash-o fa-locate'></i>Delete</button>
        </a>
      </form>
    </div>");
            }
            }
    
    
     ?></body>
<footer>
<script type="text/javascript" src="js/phonebook.js"></script>
</footer>
</html>