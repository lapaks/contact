function validateForm() {
    var x = document.forms["prayer_form"]["prayer"].value;
	var y = document.forms["prayer_form"]["prayee_name"].value;
    if (x == null || x == "" || y == null || y == "") {
        alert("Oops ! It seems you have nothing to post.");
        return false;
    }
}

function validate()
{
var chks = document.getElementsByName('checkbox[]');
var hasChecked = false;
for (var i = 0; i < chks.length; i++)
{
if (chks[i].checked)
{
hasChecked = true;
break;
}
}
if (hasChecked == false)
{
alert("Please select at least one.");
return false;
}
return true;
}






//live search
