<?php include("includes/connect.php");?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>ARINDAM SIKDAR PHOTOGRAPHY</title>
<!--<link rel =stylesheet href=lightbox2-master/dist/css/lightbox.css>

<link rel =stylesheet href=bootstrap/3.2.0/css/bootstrap.css>

<script type=text/javascript src=bootstrap/3.2.0/js/bootstrap.js></script>
<script type=text/javascript src=jquery-min.js></script>

<!--optional theme 
<link rel=stylesheet href=bootstrap/3.2.0/css/bootstrap-theme.css>-->
<link rel="icon" type="image/png" sizes="32x32" href=favicon/favicon-32x32.png />

<script type=text/javascript src=bootstrap/3.2.0/js/bootstrap.min.js></script>

<link rel=stylesheet href=stylesheets/common.css>

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
			HOME &gt;</b> <b>
			<span style="color: rgb(56, 56, 56); font-family: Arial, verdana, arial, sans-serif; font-size: 14px; font-style: italic; font-variant: small-caps; letter-spacing: normal; line-height: 21px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
			WEDDING &gt; PRE /</span><span style="color: rgb(56, 56, 56); font-family: Arial, verdana, arial, sans-serif; font-size: 14px; font-style: italic; font-variant: small-caps; letter-spacing: normal; line-height: 21px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px;">POST</span><span style="color: rgb(56, 56, 56); font-family: Arial, verdana, arial, sans-serif; font-size: 14px; font-style: italic; font-variant: small-caps; letter-spacing: normal; line-height: 21px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px;"> 
			WEDDING SHOOTS</span></b><p>&nbsp;</div>
	<div style="position: absolute; width: 1145px; z-index: 4; left: 194px; top: 229px" id="fmw">

<?php

$query = "select * from prepostwed order by prew_id DESC";
$run = mysql_query($query);
while ($row=mysql_fetch_array($run))
	{
	 $post_id = $row['prew_id'];
	 $image = $row['prew_image'];
	 //$title = $row['child_title'];




?>

		<a href="upload_prepostwed/<?php echo $image; ?>"><img src="upload_prepostwed/<?php echo $image; ?>"  height="250"  width="250" id="fetch_image"/></a>
            

	<?php } ?>	  
	
</div><!--main div ends here-->


	</body>
</html>
