<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/jquery-1.10.2.js" ></script> 
<title>Untitled Document</title>
</head>

<body>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}


</script>

<?php
include_once 'connection.php';
$query2 = "SELECT * FROM phone_book where fname='DEEPAK' order by fname ASC";
$result2 = mysqli_query($con,$query2) 
or die();
$str = '<div></div>';
while($row=mysqli_fetch_row($result2)){
    //    $str.= '<a href="contact.php?id='.$row[0].'" data-pjax="content"><ul><li id="hide">'.$row[1].' '.$row[2].'</span></div>'.'<div><i class="fa fa-location-arrow fa-locate"></i>'.$row[3].'</div>'.'<i class="fa fa-chevron-right fa-position"></i>'.'</a></div></ul>';
//	    $str.= '<ul><li onclick="showUser(this.value)" value="'.$row[0].'">'.$row[1].' '.$row[2].'</li></ul>';
	    $str.= '<ul style="max-width:400px; padding-left:0px; display:block; list-style:none; border:1px solid green;"><li style="border:1px solid red;" onclick="showUser(this.value)" value="'.$row[0].'">'.$row[1].' '.$row[2].' '.$row[3].'</li></ul>';

}
echo $str;
?>

<div id ="txtHint">
</div>
</body>
</html>