<script type="text/javascript" src="js/phonebook.js"></script>
<?php
include_once 'connection.php';
$data = $_POST['data'];
$query2 = "SELECT * FROM phone_book WHERE (fname LIKE '$data%' OR lname LIKE '$data%' OR address LIKE '$data%' OR grp LIKE '$data%') and del_flag is NULL ";
$result2 = mysqli_query($con,$query2) 
or die();
$str = '<ul></ul>';
while($row=mysqli_fetch_row($result2)){
//    $str.= '<a href="contact.php?id='.$row[0].'" data-pjax="content"><ul><li id="hide">'.$row[1].' '.$row[2].'</span></li>'.'<li><i class="fa fa-location-arrow fa-locate"></i>'.$row[3].'</li>'.'<i class="fa fa-chevron-right fa-position"></i>'.'</a></li></ul>';
//	    $str.= '<ul><li onClick="showUser(this.value)" value="'.$row[0].'">'.$row[1].' '.$row[2].'</li>'.'<li><i class="fa fa-location-arrow fa-locate"></i>'.$row[3].'</li>'.'<i class="fa fa-chevron-right fa-position"></i>'.'</li></ul>';
//	    $str.= '<ul><li onclick="showUser(this.value)" value="'.$row[0].'">'.'&nbsp;&nbsp;&nbsp;&nbsp;'.$row[1].' '.$row[2].'<span><i class="fa fa-location-arrow fa-locate"></i>'.$row[3].'</span>'.'<i class="fa fa-chevron-right fa-position"></i>'.'</li></ul>';
	    $str.= '<ul><li onclick="showUser(this.value)" value="'.$row[0].'">'.'&nbsp;&nbsp;&nbsp;&nbsp;'.$row[1].' '.$row[2].'&nbsp;&nbsp;'.'<i class="fa fa-location-arrow fa-locate fa-color"></i>'.'<span class="location">'.$row[3].'</span>'.'<i class="fa fa-chevron-right fa-position fa-color"></i>'.'</li></ul>';
}
echo $str;
?>

