<?php
include("includes/connect.php");
?>
<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Login </title>
<style>
#tab1
{
	margin-top:280px;
	border-radius:5px;
}
</style>
</head>
<body>
<div style="position: absolute; width: 1286px; height: 115px; z-index: 1; left: 154px; top: 25px" id="layer1">
<!--	<img border="0" src="../as.jpg" width="182" height="187">&nbsp;-->
	<img border="0" src="../aslogo2.jpg" width="845" height="182"><p>&nbsp;</div>

<form action="login.php" method="post">

<table width="400" align="center" id="tab1" border="0">
<tr>

<td colspan="5" align="center"><h1>Admin Login</td>
</tr>
<tr>
<td>User Name:</td>
<td><input type="text" name="user_name" required="required"></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="user_pass" required="required"></td>
</tr>
<tr>
<td align="center"><input type="submit" name="login" value="Login">&nbsp;&nbsp;<input type="reset" name="reset" value="Reset">
</tr>



</table>
</form>
</body>
</html>
<?php
include("includes/connect.php");
if(isset($_POST['login']))
	{
		$user_name1 = $_POST['user_name'];
		$user_pass1 = $_POST['user_pass'];
		$login_query = "select * from admin_login where user_name='$user_name1' AND user_password= '$user_pass1'";
		$run = mysql_query($login_query);
	if(mysql_num_rows($run)>0)
	{
		$_SESSION['user_name']=$user_name1;
		echo"<script>window.open('index.php','_self');</script>";	
	}
		
	else
	{
	echo "<script>alert('username or password incorrect');</script>";
	}
	}
?>