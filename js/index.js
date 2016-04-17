/* Inpired by Jee Dribbble Shot ( http://dribbble.com/shots/770815-Login ) */ 
/* coded by alireza attari ( @alireza_attari ) */ 

$(function() {
        $('.likeLink').click(function() {
            $.get('admin_home.php', function(data) {
                alert("Server Returned: " + data);
            });
            return false;
        });
    });