<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="../css/reg_css.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>

function mobval(){

var x=document.getElementById("mob").value;
var len=x.length;
if(len != 10 || isNaN(x)){alert('Enter Valid Mobile Number..');}	
	
}

$(document).ready(function() {

    $('#event').change(function() {
        var myValue = $(this).val();
        var myText = $("#event :selected").text();

        if (myText == "Pc Games") {
           $("#b").show();
		   $("#b1").show();
		   $("#b2").show();
		   $("#b3").show();
        }
        else{
           $("#b").hide();
		   $("#b1").hide();
		   $("#b2").hide();
		   $("#b3").hide();
        }
    });
});
</script>
<title>Tech Events Registration</title>
</head>

<body>

<div class="main_box">
<form method="post" action="process_fun.php" enctype="multipart/form-data">
<table border="0" cellpadding="10" cellspacing="10">
<tr align="center">
<td colspan="2"><div class="fon">FUN EVENTS</div></td>
</tr>
<tr align="center">
<td colspan="2"><input type="text" placeholder="Enter Your Name..." name="name" required="required" /></td>
</tr>

<tr align="center">
<td colspan="2"><input type="text" placeholder="Enter Your Roll No..." name="roll" required="required" /></td>
</tr>

<tr align="center">
<td colspan="2">
<select name="dept" required="required">
<option value="NA">Choose Your Department</option>
<option value="civil">Civil Engineering</option>
<option value="mech">Mechanical Engineering</option>
<option value="mts">Mechatronics Engineering</option>
<option value="ame">Automobile Engineering </option>
<option value="chem">Chemical Engineering</option>
<option value="ft">Food Technology</option>
<option value="eee">Electrical and Electronics Engineering</option>
<option value="eie">Electronics and Instrumentation Engineering</option>
<option value="ece">Electronics and Communication Engineering</option>
<option value="cse">Computer Science and Engineering</option>
<option value="it">Information Technology</option>
<option value="ca">Computer Applications</option>
<option value="ct">Computer Technology</option>
</select>
</td>
</tr>

<tr align="center">
<td colspan="2"><input type="text" onblur="mobval()" class="form-control" placeholder="Enter Your mobile No..." name="mobile" required="required" id="mob" /></td>
</tr>

<tr align="center">
<td colspan="2"><select name="event" id="event" required="required">
<option value="NA" selected="selected">Choose Your Event</option>
<option value="meme">Meme Creators</option>
<option value="pc_games">Pc Games</option>
<option value="solo_stars">Solo Star</option>
</select>
</td>
</tr>

<tr align="center">
<td colspan="2"><input type="email" placeholder="Enter Your E-Mail..." name="mail" required="required" /></td>
</tr>


<tr align="center" style="display:none" id="b">
<td><input type="text" placeholder="Member 1 Name..." name="m1_name" /></td>
<td><input type="text" placeholder="Member 1 Phone No..." name="m1_phone" /></td>
</tr>
<tr align="center" style="display:none" id="b1">
<td><input type="text" class="form-control" placeholder="Member 2 Name..." name="m2_name" /></td>
<td><input type="text" class="form-control" placeholder="Member 2 Phone No..." name="m2_phone" /></td>
</tr>
<tr align="center" style="display:none" id="b2">
<td><input type="text" class="form-control" placeholder="Member 3 Name..." name="m3_name" /></td>
<td><input type="text" class="form-control" placeholder="Member 3 Phone No..." name="m3_phone" /></td>
</tr>
<tr align="center" style="display:none" id="b3">
<td><input type="text" class="form-control" placeholder="Member 4 Name..." name="m4_name" /></td>
<td><input type="text" class="form-control" placeholder="Member 4 Phone No..." name="m4_phone" /></td>
</tr>

<tr align="center">
<td colspan="2"><input type="submit" value="Submit"/></td>
</tr>
</form>
</table>

</div>


</body>
</html>