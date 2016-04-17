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


$(document).ready(function() {  
        //the min chars for username  
        var min_chars = 3;  
  
        //result texts  
        var characters_error = 'Minimum amount of chars is 3';  
        var checking_html = 'Checking...';  
  
        //when button is clicked  
        $('#grpname').focusout(function(){  
            //run the character number check  
            if($('#grpname').val().length < min_chars){  
                //if it's bellow the minimum show characters_error text '  
                $('#grpname_availability_result').html(characters_error);  
            }else{  
                //else show the cheking_text and run the function to check  
                $('#grpname_availability_result').html(checking_html);  
                check_availability();  
            }  
		
		});  
  
  });  
  
//function to check username availability  
function check_availability(){  
  
        //get the username  
        var username = $('#grpname').val();  
  
        //use ajax to run the check  
        $.post("validate-group.php", { username: username },  
            function(result){  
                //if the result is 1  
                if(result == 1){  
                    //show that the username is available  
                    $('#grpname_availability_result').html(username + ' is a valid name').removeClass("alert");  
                }else{  
                    //show that the username is NOT available  
                    $('#grpname_availability_result').html(username + ' already exists').addClass("alert");  
                }  
        });  
  
}  
