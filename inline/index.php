<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HTML5 Inline Content Editing with jQuery, PHP & MYSQL</title>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
$(function(){
	//acknowledgement message
    var message_status = $("#status");
    $("td[contenteditable=true]").blur(function(){
        var field_userid = $(this).attr("id") ;
        var value = $(this).text() ;
        $.post('ajax.php' , field_userid + "=" + value, function(data){
            if(data != '')
			{
				message_status.show();
				message_status.text(data);
				//hide the message
				setTimeout(function(){message_status.hide()},1000);
			}
        });
    });
	
	
	 jQuery('.s_download').click(function(){
			var semail = jQuery("#itzurkarthi_email").val();
			if(semail == '')
			{
				alert('Enter Email');
				return false;
			}
			var str = "sub_email="+semail
			jQuery.ajax({
				type: "POST",
				url: "download.php",
				data: str,
				cache: false,
				success: function(htmld){
						jQuery('#down_update').html(htmld);
				}
			});
	  });
	
});
</script>
<style>
table.zebra-style {
	font-family:"Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
	text-align:left;
	border:1px solid #ccc;
	margin-bottom:25px;
	width:90%
}
table.zebra-style th {
	color: #444;
	font-size: 13px;
	font-weight: normal;
	padding: 10px 8px;
}
table.zebra-style td {
	color: #777;
	padding: 8px;
	font-size:13px;
}
table.zebra-style tr.odd {
	background:#f2f2f2;
}
body {
	background:#fafafa;
}
.container {
	width: 800px;
	border: 1px solid #C4CDE0;
	border-radius: 2px;
	margin: 0 auto;
	height: 1300px;
	background:#fff;
	padding-left:10px;
}
	#status { padding:10px; background:#88C4FF; color:#000; font-weight:bold; font-size:12px; margin-bottom:10px; display:none; width:90%; }
</style>
</head>
<body>
<div class="container"><br>
<center>
</center>

  <div id="status"></div>
<table class="table zebra-style">
    <thead>
      <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>City</th>
      </tr>
    </thead>
    <tbody>
      <tr class="odd">
        <td>1</td>
        <td id="fname:1" contenteditable="true">Karthikeyan</td>
        <td id="last_name:1" contenteditable="true">K</td>
        <td id="city:1" contenteditable="true">Chennai</td>
      </tr>
    </tbody>
 </table>
 <br>
<br>

</div>
<script type="text/javascript">
function woopraReady(tracker) {
    tracker.setDomain('w3lessons.info');
    tracker.setIdleTimeout(1800000);
    tracker.track();
    return false;
}
(function() {
    var wsc = document.createElement('script');
    wsc.src = document.location.protocol+'//static.woopra.com/js/woopra.js';
    wsc.type = 'text/javascript';
    wsc.async = true;
    var ssc = document.getElementsByTagName('script')[0];
    ssc.parentNode.insertBefore(wsc, ssc);
})();
</script>
<!-- End of Woopra Code -->
  </body>
</html>