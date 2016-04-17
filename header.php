<?php session_start();?>
<div id="menu">
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand visible-xs"><h1>Phone<span>Book</span></h1></a>
        <a class="navbar-brand"><h3><?php 
if (isset($_SESSION['login_user'])): ?><?php echo $_SESSION['login_user'];?><?php endif ?></h3>
        </a> </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.php"><i class="fa fa-home fa-locate"></i>Home</a></li>
          <li><a href="all.php?id=ALL"><i class="fa fa-globe fa-locate"></i>All Contacts</a></li>
          <li><a href="index.php"><i class="fa fa-user-plus fa-locate"></i>Add Contact</a></li>
          <li><a href="family.php"><i class="fa fa-male"></i><i class="fa fa-child"></i><i class="fa fa-female fa-locate"></i>Family</a></li>
          <li><a href="group.php"><i class="fa fa-users fa-locate"></i>Group</a></li>
          <?php 
if (isset($_SESSION['login_user'])): ?>
<li><a  href="logout.php"><i class="fa fa-sign-out fa-locate"></i>Logout</a></li> 
<?php endif ?>
          <?php 
if (!isset($_SESSION['login_user'])): ?>
<li><a href="login.php"><i class="fa fa-sign-in fa-locate"></i>Login</a></li> 
<?php endif ?>
        </ul>
        </li>
        </ul>
      </div>
      <!--/.nav-collapse --> 
    </div>
  </nav>
</div>
