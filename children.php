<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="icon" type="image/png" sizes="32x32" href=favicon/favicon-32x32.png />

<title>ARINDAM SIKDAR PHOTOGRAPHY</title>
<link rel="stylesheet" href="stylesheets/common.css" media="all">
</head>

<body>



        <div style="position: absolute; width: 1133px; height: 116px; z-index: 1; left: 190px; top: 9px" id="main_div">
&nbsp;&nbsp;&nbsp;
<!--<img border="0" src="as.jpg" width="84" height="100">&nbsp;-->
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
			HOME &gt;</b> <b>
			<span style="font-family: Arial, verdana, arial, sans-serif; font-style: italic; font-variant: small-caps; font-size: 14px; color: #383838; letter-spacing: normal">
			CHILDR</span><span style="color: rgb(56, 56, 56); font-family: Arial, verdana, arial, sans-serif; font-size: 14px; font-style: italic; font-variant: small-caps; letter-spacing: normal; line-height: 21px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px;">EN</span></b><p>&nbsp;</div>
	<div style="position: absolute; width: 1145px;  z-index: 4; left: 194px; top: 229px" id="fmw">
<?php
include("includes/connect.php");
$query = "select * from children order by child_id DESC";
$run = mysql_query($query);
while ($row=mysql_fetch_array($run))
	{
	 $post_id = $row['child_id'];
	 $image = $row['child_image'];
	 //$title = $row['child_title'];




?>

		<a href="upload_child/<?php echo $image; ?>"><img src="upload_child/<?php echo $image; ?>"  height="250"  width="250" id="fetch_image"/></a>
            

	<?php } ?>	  
	</div>


</body>
</html>