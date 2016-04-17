<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css" media="screen" type="text/css" />
<link rel="stylesheet" href="css/fontface.css" type="text/css" />
<link rel="stylesheet" href="css/phonebook.css">
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootswatch/3.0.3/cosmo/bootstrap.min.css" media="screen" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<form id='' name='edit-phone-book' method='post' action='insert-phone-book.php'>
  <input class='hidden-id' type='text' name='id' value='$info[0]'>
  <div class='panel-heading add-border clearfix'>
    <h3 class='panel-title pull-left'></h3>
    <div class='btn-group pull-right visible-xs'></div>
    <a class='btn btn-primary btn-cancel pull-right btn-in-header hidden-xs' href='index.php'> <i class='fa fa-times'></i> <span>Cancel</span> </a> <a>
    <button class='btn btn-primary pull-right' type='submit'><i class='fa fa-pencil-square-o fa-locate'></i>Add</button>
    </a> </div>
  <div class='list-group-item'> <img src='' class='img-rounded pull-left'>
    <label>Name</label>
    <h4 class='list-group-item-heading'>
      <input autocomplete='off' placeholder='First Name' name='fname' value='' />
      <input autocomplete='off' placeholder='Last Name' name='lname' value=''/>
    </h4>
  </div>
  <div class='list-group-item'>
    <label>Address</label>
    <h4 class='list-group-item-heading'><i class='fa fa-location-arrow fa-position'></i>
      <input autocomplete='off' placeholder="Address - City or Area" name='address' value=''/>
    </h4>
  </div>
  <a class='list-group-item' href='tel://+1 650-555-0055'>
  <label>Mobile</label>
  <h4 class='list-group-item-heading'><i class='fa fa-mobile fa-position'></i>
    <input autocomplete='off' placeholder="Mobile" name='mobile' value=''/>
  </h4>
  </a> <a class='list-group-item' href='tel://+1 650-555-0055'>
  <label>Phone</label>
  <h4 class='list-group-item-heading'> <i class='fa fa-phone fa-position'></i>
    <input autocomplete='off' name='phone1' placeholder='Phone1' value=''/>
    <input autocomplete='off' name='phone2' placeholder='Phone2' value=''/>
    <input autocomplete='off' name='phone3' placeholder='Phone3' value=''/>
  </h4>
  </a> <a class='list-group-item' href='mailto:Sofia.Acey@masung.com'>
  <label>Email</label>
  <h4 class='list-group-item-heading'><i class='fa fa-envelope-o fa-position'></i>
    <input autocomplete='off' placeholder="Email" name='email' value=''/>
  </h4>
  </a>
  <div class='list-group-item'>
    <label>Reference</label>
    <h4 class='list-group-item-heading'>
      <input type="text" placeholder="Reference" autocomplete="off" name="ref" />
    </h4>
  </div>
  <div class='list-group-item'>
    <label>Comment</label>
    <h4 class='list-group-item-heading'>
      <input type="text" placeholder="Comment" autocomplete="off" name="cmt" />
    </h4>
  </div>
  <div class='list-group-item'>
    <label>Group</label>
    <h4 class='list-group-item-heading'>
      <input type="text" placeholder="Select Group" autocomplete="off" name="grp" />
    </h4>
  </div>
</form>
<div class='panel-footer add-border clearfix'>
  <h3 class='panel-title pull-left'></h3>
  <div class='btn-group pull-right visible-xs'> </div>
  <form name='del-form' method='post' action='delete-phone-book.php'>
    <input class='hidden-id' type='text' name='id' value='$info[0]'>
    <a class='hidden-xs'>
    <button class='btn btn-primary btn-del pull-right hidden-xs' type='submit'><i class='fa fa-trash-o fa-locate'></i>Delete</button>
    </a>
  </form>
</div>
