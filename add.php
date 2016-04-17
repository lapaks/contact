<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css" media="screen" type="text/css" />
<link rel="stylesheet" href="css/fontface.css" type="text/css" />
<link rel="stylesheet" href="css/phonebook.css">
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootswatch/3.0.3/cosmo/bootstrap.min.css" media="screen" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<form class="form-group" name='edit-phone-book' method='post' action='insert-phone-book.php'>
  <input class='hidden-id' type='text' name='id' value='$info[0]'>
  <div class='panel-heading add-border clearfix'>
    <h3 class='panel-title pull-left'></h3>
    <div class='btn-group pull-right visible-xs'></div>
    <a class='btn btn-primary btn-cancel pull-right btn-in-header hidden-xs' href='index_pjax.php'> <i class='fa fa-times'></i> <span>Cancel</span> </a> <a>
    <button class='btn btn-primary pull-right' type='submit'><i class='fa fa-pencil-square-o fa-locate'></i>Add</button>
    </a> </div>
  <a class='list-group-item'> <img src='' class='img-rounded pull-left'>
    <label>Name</label>
    <h4 class='list-group-item-heading'>
      <input class="form-control form-input" autocomplete='off' placeholder='First Name' name='fname' required="required" value='' />
      <input class="form-control form-input"  autocomplete='off' placeholder='Last Name' name='lname' required="required" value=''/>
    </h4>
  </a>
  <a class='list-group-item'>
    <label>Address</label>
    <h4 class='list-group-item-heading'><i class='fa fa-location-arrow fa-position'></i>
      <input class="form-control form-input"  autocomplete='off' placeholder="Address - City or Area" required="required" name='address' value=''/>
    </h4>
  </a>
  <a class='list-group-item' >
  <label>Mobile</label>
  <h4 class='list-group-item-heading'><i class='fa fa-mobile fa-position'></i>
    <input class="form-control form-input"  autocomplete='off' placeholder="Mobile" name='mobile' value=''/>
  </h4>
  </a> <a class='list-group-item'>
  <label>Phone</label>
  <h4 class='list-group-item-heading'> <i class='fa fa-phone fa-position'></i>
    <input class="form-control form-input" autocomplete='off' name='phone1' placeholder='Phone1' value=''/>
    <input class="form-control form-input"  autocomplete='off' name='phone2' placeholder='Phone2' value=''/>
    <input class="form-control form-input"  autocomplete='off' name='phone3' placeholder='Phone3' value=''/>
  </h4>
  </a> <a class='list-group-item' >
  <label>Email</label>
  <h4 class='list-group-item-heading'><i class='fa fa-envelope-o fa-position'></i>
    <input class="form-control form-input" type="email" autocomplete='off' placeholder="Email" name='email' value=''/>
  </h4>
  </a>
  <a class='list-group-item'>
    <label>Reference</label>
    <h4 class='list-group-item-heading'>
      <input class="form-control form-input"  type="text" placeholder="Reference" required="required" autocomplete="off" name="ref" />
    </h4>
  </a>
  <a class='list-group-item'>
    <label>Comment</label>
    <h4 class='list-group-item-heading'>
      <input class="form-control form-input"  type="text" placeholder="Comment" autocomplete="off" name="cmt" />
    </h4>
  </a>
  <a class='list-group-item'>
    <label>Group</label>
    <h4 class='list-group-item-heading'>
    <select required name='grp' class="form-control form-input">
      <option disabled selected>Choose a Group</option>
      <option>Family</option>
  <option>Close Friends</option>
  <option>Friends</option>
  <option>Relatives</option>
  <option>Acquaintances</option>
  <option>Utilities</option>
  <option>Hospital</option>
  <option>Others</option>
  </select>
    </h4>
  </a>
</form>
