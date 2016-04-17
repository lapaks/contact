<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
     function showEmployee(str) {
        if (str==""){
            document.getElementById("div1").innerHTML="Select an Employee for more details!";
            return;
        }
        var xhr = false;
        if (window.XMLHttpRequest) {
            // IE7+, Firefox, Chrome, Opera, Safari
            xhr = new XMLHttpRequest();
        } 
        else {
            // IE5/IE6
            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        }
        if (xhr) {
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("div1").innerHTML = xhr.responseText;
                }
            }
            xhr.open("GET", "set_con.php?q="+str, true);
            xhr.send(null);
        }
    }
</script>
</head>
<body>
<div>
    <select name="employees" onchange="showEmployee(this.value)">
        <option value="">Select an Employee:</option>
        <option value="3">Frank Ford</option>
        <option value="1">John Smith</option>
        <option value="4">Lisa Stark</option>
        <option value="2">Sally Smart</option>
    </select>
    <div id="div1">Select an Employee for more details!</div>
</div>
</body>
</html>