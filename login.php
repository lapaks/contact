<?php session_start();?>
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
<div class="container wrapper">
  <div class="main clearfix">
      <div class="add-family col-sm-4"></div>

<div class="col-sm-4">
      <form class='form-group' name='edit-phone-book' method='post' action='check_login.php'>
        <input class='form-control hidden-id' type='text' name='id' value='$info[0]'>
        <div class='panel-heading add-border clearfix'>
          <h3 class='panel-title pull-left'>
            <label>Login</label>
          </h3>
          <div class='btn-group pull-right visible-xs'> </div>
          <a class='btn btn-primary btn-cancel pull-right btn-in-header hidden' href='contact.php?id=$info[0]'> <i class='fa fa-times'></i> <span>Cancel</span> </a>
          <button class='btn btn-primary pull-right hidden' type='submit'><i class='fa fa-pencil-square-o fa-locate'></i>Update</button>
          </a> </div>
        <a class='list-group-item'>
        <h4 class='list-group-item-heading'>
          <input type="email" class='form-control' autocomplete='off' placeholder='Email' name='email' required='required' value='' />
          <input type="password" class='form-control' autocomplete='off' placeholder='Passcode' name='password' required='required' value='' />
        </h4>
        <div id='grpname_availability_result'></div>
        </a>
        <div class='panel-footer clearfix'>
          <h3 class='panel-title pull-left'></h3>
          <div class='btn-group pull-right visible-xs'> </div>
          <a class=''>
          <button class='btn btn-primary pull-right btn-add' type='submit'><i class='fa fa-sign-in fa-locate'></i>Login</button>
          </a> </div>
      </form>
      
<div class="login-help">
  <?php
			if ( isset ( $_SESSION['views'] ) ) {
			echo "Invalid UserName or Password";
			session_destroy();}?>
</div>

</div>
<div class="col-sm-4">
<div class="col-sm-4"></div>

</div>

<div class="col-sm-4"></div>
</div>

    
  </div>
</div>
</div>
</body>
<footer>
<?php include 'footer.php';?>
</footer>
</html>