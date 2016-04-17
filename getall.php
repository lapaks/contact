<?php
include_once 'connection.php';
$query2 = "SELECT * FROM phone_book where del_flag is NULL order by fname ASC";
$result2 = mysqli_query($con,$query2) 
or die();
$str = '<div></div>';
while($row=mysqli_fetch_row($result2)){
    //    $str.= '<a href="contact.php?id='.$row[0].'" data-pjax="content"><ul><li id="hide">'.$row[1].' '.$row[2].'</span></div>'.'<div><i class="fa fa-location-arrow fa-locate"></i>'.$row[3].'</div>'.'<i class="fa fa-chevron-right fa-position"></i>'.'</a></div></ul>';
	    $str.= '<ul><li onclick="showUser(this.value)" value="'.$row[0].'">'.'&nbsp;&nbsp;&nbsp;&nbsp;'.$row[1].' '.$row[2].'&nbsp;&nbsp;'.'<i class="fa fa-location-arrow fa-locate fa-color"></i>'.'<span class="location">'.$row[3].'</span>'.'<i class="fa fa-chevron-right fa-position fa-color"></i>'.'</li></ul>';

}
echo $str;
?>
