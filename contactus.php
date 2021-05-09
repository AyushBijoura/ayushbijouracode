<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>ARINDAM SIKDAR PHOTOGRAPHY</title>
<link rel="icon" type="image/png" sizes="32x32" href=favicon/favicon-32x32.png />

<!--<link rel =stylesheet href=lightbox2-master/dist/css/lightbox.css>

<link rel =stylesheet href=bootstrap/3.2.0/css/bootstrap.css>

<script type=text/javascript src=bootstrap/3.2.0/js/bootstrap.js></script>
<script type=text/javascript src=jquery-min.js></script>-->

<!--optional theme -->
<!--<link rel=stylesheet href=bootstrap/3.2.0/css/bootstrap-theme.css>

<script type=text/javascript src=bootstrap/3.2.0/js/bootstrap.min.js></script>-->
<link rel="stylesheet" href="stylesheets/common.css">
</head>

<body>
        <div style="position: absolute; width: 1133px; height: 116px; z-index: 1; left: 190px; top: 9px" id="main_div">
<!--&nbsp;&nbsp;&nbsp;
<img border="0" src="as.jpg" width="84" height="100">&nbsp;-->
<a href="index.php"><img border="0" src="aslogo2.jpg" width="857" height="162"></a></div>












<div style="position: absolute; width: 184px; height: 399px; z-index: 2; left: 1px; top: 118px" id="sidemenu">
&nbsp;
	<ul>
		<li><i><b><a href="index.php">HOME</a></b></i></li>
		<li><i><b><a href="fashion.php">FASHION</a></b></i></li>
		<li><i><b><a href="wedding.php">WEDDING</a></b></i></li>
		<li><i><b><a href="children.php">CHILDREN</a></b></i></li>
		<li><i><b><a href="family.php">FAMILY</a></b></i></li>
		<li><i><b><a href="events.php">EVENTS</a></b></i></li>
		<li><i><b><a href="couples.php">COUPLES</a></b></i></li>
		<li><i><b><a href="aboutus.php">ABOUT US</a></b></i></li>
		<li><i><b><a href="contactus.php">CONTACT US</a></b></i></li>
	</ul>
</div>












		<div style="position: absolute; width: 1146px; height: 32px; z-index: 3; left: 197px; top: 161px" id="fashion">
			<b style="color: rgb(56, 56, 56); font-family: Arial, verdana, arial, sans-serif; font-size: 14px; font-style: italic; font-variant: small-caps; letter-spacing: normal; line-height: 21px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
			&nbsp;&nbsp;&nbsp;
			HOME &gt;</b> 
			<span style="font-size: 14px; color: #383838; letter-spacing: normal">
			<b>
			<span style="font-family: Arial, verdana, arial, sans-serif; font-style: italic; font-variant: small-caps">
			CONTAC</span></b></span><b><span style="color: rgb(56, 56, 56); font-family: Arial, verdana, arial, sans-serif; font-size: 14px; font-style: italic; font-variant: small-caps; letter-spacing: normal; line-height: 21px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px;">T 
			US</span></b><p>&nbsp;</div>
	<div style="position: absolute; width: 1145px;  z-index: 4; left: 194px; top: 229px" id="contact-us">

<form method="post" action="contactus.php" enctype="multipart/form-data">
	<table align="center" border="0" width="800">
		<!--<tr>
			<td align="center" colspan="5" bgcolor="yellow">
			<h1>Insert New Post Here</h1>
			</td>
		</tr>-->
		<tr>
			<td><b>Name:</b></td>
			<td><input type="text" name="name" required="required"></td>
		</tr>
		<tr>
			<td><b>Email:</b></td>
			<td><input type="email" name="email" required="required"></td>
		</tr>
		<tr>
			<td><b>Contact no:</b></td>
			<td><input type="number" name="contact" required="required"></td>
		</tr>
		<tr>
			<td><b>Message:</b></td>
			<td><textarea name="content" cols="30" rows="10" required="required"></textarea> </td>
		</tr>
		<tr>
			
			<td  colspan="5"><input type="submit" name="sub" value="Submit"/> <input type="reset" value="Clear"/></td>
		</tr>
	</table>
	
	</form>
	



	
	
	
	
	</div>






<!--contact-us ends here-->
 </body>  
</html>
</html>
	<?php
	include("includes/connect.php");
	if(isset($_POST['sub']))
	{
		$title = $_POST['name'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$content = $_POST['content'];
		/*$image_name = $_FILES['image']['name'];
		$image_type = $_FILES['image']['type'];
		$image_size = $_FILES['image']['size'];
		$image_tmp = $_FILES['image']['tmp_name'];*/
		
		if($title =='' or $email =='' or $content == '' or $contact =='')
		{
			echo "<script>alert('Any field is empty')</script>";
			exit();
		}
	/*	if($image_type=="image/jpeg" or $image_type=="image/png" or $image_type=="image/gif")
		{
			if($image_size<=50000)
			{
					move_uploaded_file($image_tmp,"images/$image_name");
			}
			else
			{
				echo "<script>alert('Image size is larger')</script>";
			}
		}
		else
		{
			echo "<script>alert('Image type is invalid')</script>";
		}*/
		$query = "insert into user_feedback (user_name,user_email,user_mobno,user_message) values ('$title','$email','$contact','$content')";
		if(mysql_query($query))
		{
			echo "<script>alert('Thanks for your feedback');</script>";
		}
		else
		{
			echo "Not published";
		}
	
	}
	
	?>