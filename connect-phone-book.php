<?php 
$host="localhost"; // Host name 
$username="pattake_pattake"; // Mysql username 
$password="jhg(*&LKHJG#2"; // Mysql password 
$db_name="pattake_pattake1"; // Database name 
$tbl_name="phone_book"; // Table name 
/*
$host="localhost"; // Host name 
$username="lapaks"; // Mysql username 
$password="pattake"; // Mysql password 
$db_name="lapaks"; // Database name 
$tbl_name="phone_book"; // Table name 
*/
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// To protect MySQL injection (more detail about MySQL injection)
$sql="SELECT * FROM $tbl_name WHERE ID='" . $_GET['id'] . "'";
$result=mysql_query($sql);



 ?>
