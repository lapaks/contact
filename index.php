<?php session_start();?>
<!DOCTYPE html>
<html dir="ltr" lang="en-GB">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css" media="screen" type="text/css" />
<link rel="stylesheet" href="css/fontface.css" type="text/css" />
<link rel="stylesheet" href="css/phonebook.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-1.10.2.js" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/jquery.placeholder.js"></script>
<title>Phone Book</title>
</head>
<header>
  <?php include 'header.php';?>
</header>
<script>
$(document).ready(function(){
        $.post('getall.php',function(value){
            $('#tab').html(value);
        });
        
        $('#filterfield').keyup(function(){
        var data = $(this).val();
        if($('#filterfield').val() === ''){
           $.post('getall.php',function(value){
            $('#tab').html(value);
        }); 
        }    
        else{
            $.post('get.php',{data:data},function(value){
                $('#tab').html(value);
            });
        }
        });
    });

</script>
<script>
			$(function() {
				$('input, textarea').placeholder({customClass:'my-placeholder'});
				var html;
					if (html) {
					$('<p class="note">' + html + '</p>').insertAfter('form');
				}
			});
		</script>
</head>
<body>
<div class="container wrapper">
  <div class="main clearfix">
    <div class="col-sm-4 left-pannel">
      <input title="Search by Name, Address, Mobile No, Group" type="text" id="filterfield" class="inputs form-control" placeholder="Search Name, Address, Group"/>
      <div id="tab"> </div>
    </div>
    <div class="visible-xs gap"></div>
    <div class="col-sm-4 right-pannel">
      <div id="txtHint">
        <form class="form-group" name='edit-phone-book' method='post' action='insert-phone-book.php'>
          <input class='hidden-id' type='text' name='id' value='$info[0]'>
          <div class='panel-heading add-border clearfix'>
            <h3 class='panel-title pull-left'>
              <label>Create a New Contact</label>
            </h3>
            <div class='btn-group pull-right visible-xs'></div>
            <a> </a> </div>
          <a class='list-group-item'>
          <h4 class='list-group-item-heading'>
            <input class="form-control" autocomplete='off' placeholder='First Name' name='fname' required/>
            <input class="form-control"  autocomplete='off' placeholder='Last Name' name='lname' required/>
          </h4>
          </a> <a class='list-group-item'>
          <h4 class='list-group-item-heading'>
            <input class="form-control"  autocomplete='off' placeholder="Address - City or Area" required name='address' value=''/>
          </h4>
          </a> <a class='list-group-item' >
          <h4 class='list-group-item-heading'>
            <input class="form-control"  autocomplete='off' placeholder="Mobile" name='mobile' value=''/>
          </h4>
          </a> <a class='list-group-item'>
          <h4 class='list-group-item-heading'>
            <input class="form-control" autocomplete='off' name='phone1' placeholder='Phone1' value=''/>
            <input class="form-control"  autocomplete='off' name='phone2' placeholder='Phone2' value=''/>
            <input class="form-control"  autocomplete='off' name='phone3' placeholder='Phone3' value=''/>
          </h4>
          </a> <a class='list-group-item' >
          <h4 class='list-group-item-heading'>
            <input class="form-control" type="email" autocomplete='off' placeholder="Email" name='email' value=''/>
          </h4>
          </a> <a class='list-group-item'>
          <h4 class='list-group-item-heading'>
            <input class="form-control"  type="text" placeholder="Reference" required autocomplete="off" name="ref" />
          </h4>
          </a> <a class='list-group-item'>
          <h4 class='list-group-item-heading'>
            <input class="form-control"  type="text" placeholder="Comment" autocomplete="off" name="cmt" />
          </h4>
          </a> <a class='list-group-item'>
          <h4 class='list-group-item-heading'>
          <?php include 'connection.php';?>
<?php
$sql="SELECT * from grp_name";
$result=mysqli_query($con,$sql);
echo "<select required name='grp', id='grp_name' class='form-control'>";
echo "<option selected disabled>Choose a Group</option>";
while ($row = mysqli_fetch_array($result)) {
    echo strtoupper (" <option value='" . $row['grp_name'] ."'>" . $row['grp_name'] ."</option>");
}
echo "</select>";
 ?>          </h4>
          </a>
          <div class='panel-footer clearfix'>
            <h3 class='panel-title pull-left'></h3>
            <div class='btn-group pull-right visible-xs'> </div>
            <a class=''>
            <button class='btn btn-primary pull-right btn-add' type='submit'><i class='fa fa-pencil-square-o fa-locate'></i>Add</button>
            </a> </div>
        </form>
      </div>
    </div>
        <div class="visible-xs gap"></div>
    <div class="fav col-sm-4">
          <?php include 'connection.php';?>
      <?php 
	
$sql1="SELECT ID,fname,lname,address,mobile FROM $tbl_name where fav=1 order by fname ASC";
$result1=mysqli_query($con,$sql1);
$num_results = mysqli_num_rows($result1); 
if ($num_results <=0){ 
echo ("<div class='panel-heading add-border clearfix'>
            <h3 class='panel-title pull-left'>
              <label>No Favorite Contacts</label>
            </h3>
            <div class='btn-group pull-right visible-xs'></div>
            </div>");
}
else{ 
 echo "          <div class='panel-heading add-border clearfix'>
            <h3 class='panel-title pull-left'>
              <label>Favorite Contacts</label>
            </h3>
            <div class='btn-group pull-right visible-xs'></div>
            </div>
			<div id='fav'>
	<table class='table table-condensed table-hover tbl-margin full-border'>
 "; 
 while($info = mysqli_fetch_row($result1)){
  echo
  ("
        <tr>
	    <td><ul><li onclick='showUser(this.value)' value='$info[0]'>$info[1]&nbsp;$info[2]&nbsp;&nbsp;<i class='fa fa-location-arrow fa-locate fa-color'></i><span class='location'>$info[3]</span><i class='fa fa-chevron-right fa-position fa-color'></i></li></ul></td>
		</tr> ");
}
}
?>	
</div>
      </table>

    </div>
  </div>
</div>
</body>
<footer>
<?php include 'footer.php';?>
</footer>
</html>