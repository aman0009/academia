
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="aman.css" />
<title>ACADEMIA</title>
<script type="text/javascript">
function vali()
{                    //document.myForm.name.value; 
	var username = document.am.username.value;
	var password = document.am.password.value; 
	if(username=="")
	{
		alert("Please enter the username");
		document.am.username.focus();
		return false;
	}
	if(password=="")
	{
		alert("Please enter the password");
		document.am.password.focus();
		return false;
	}
}
</script>

</head>

<body bgcolor="#114">

<form action="login_submit.php" method="post" name="am" onSubmit="return vali()">

<div class="aman">
<img width="195" height="103" ;="" style="margin:5px 212px" alt="srm" src="srm.png">
<img width="251" height="119" align="right" ;="" style="margin:0px 156px" alt="acd" src="acd.png">
</div>
<h3 class="h3">Faculty of Engineering and Technology</h3>
<br />
<div class="am">
<table>
<h3 class="a">Login<h3>
<tr>
   <td style="color:#FF">Email Address
   <input id="ad" type="text" name="username" placeholder="Email Address"></td>
</tr>
<tr>
<td>&nbsp </td>
</tr>
  
<tr>
   <td height="44" style="color:#FF">Password<input id="ad" type="password" name="password" placeholder="Password"></td>
</tr>

</tr>
<tr>
<td>&nbsp </td>
</tr>

<tr>
   <td><input type="submit" value="Submit"></td>
</tr>

</tr>
<tr>
<td>&nbsp </td>
</tr>

<tr>
   <td style="text-align:center" colspan="2"><a href="" style="color:#FF">Forgot Password</a></td>
</tr>

</table>
</div>
</form>
</body>      
</html>
</body>
</html>