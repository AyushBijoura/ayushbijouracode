<?php
session_start();
if(!isset($_SESSION['user_name']))
{
	header("location:login.php");
}
else
{
	

?>

<!DOCTYPE HTML>

<!DOCTYPE HTML>
<html>
	<head>
				<title>Insert new photo</title>
		<link rel="stylesheet" href="admin_style.css">
		</head>
		<body>
		<header>
		
		<h1>Welcome to admin panel of Arindam Sikdar Photography</h1>
		</header>
	<aside>
	<h3><a href="logout.php">Logout</a></h3>

		<h2>Insert Content</h2>
			<h3><a href="insert_photo.php">Slider</a></h3>
			<h3><a href="insert_fwomenphoto.php">Fashion Women</a></h3>
			<h3><a href="insert_fmenphoto.php">Fashion men</a></h3>
			<h3><a href="insert_familyphoto.php">Family</a></h3>
			<h3><a href="insert_eventphoto.php">Events</a></h3>
			<h3><a href="insert_couplephoto.php">Couples</a></h3>
			<h3><a href="insert_photochildren.php">Children</a></h3>
			<h3><a href="insert_prepostwed.php">Pre/post wedding</a></h3>
			<h3><a href="insert_weddingshoots.php">Wedding shoots</a></h3>
	
		<h2>Delete/Update Content</h2>
			<h3><a href="index.php?view=view">(Delete/Update)Slider</a></h3>
			<h3><a href="dufwen.php?view=View">(Delete/Update)Fashion Women</a></h3>
			<h3><a href="dufmen.php?view=view">(Delete/Update)Fashion men</a></h3>
			<h3><a href="dufamily.php?view=view">(Delete/Update)Family</a></h3>
			<h3><a href="duevents.php?view=view">(Delete/Update)Events</a></h3>
			<h3><a href="ducouples.php?view=view">(Delete/Update)Couples</a></h3>
			<h3><a href="duchildren.php?view=view">(Delete/Update)Children</a></h3>
			<h3><a href="duprewed.php?view=view">(Delete/Update)Pre/post wedding</a></h3>			
			<h3><a href="duwedshhots.php?view=view">(Delete/Update)Wedding shoots</a></h3>
<h3><a href="dufeedback.php?view=view">(Delete/Update)Feedback</a></h3>	
	</aside>


	<form method="post" action="insert_photo.php" enctype="multipart/form-data">
	<table align="center" border="1" width="800">
		<tr>
			<td align="center" colspan="5" bgcolor="yellow">
			<h1>Insert New Photo Here</h1>
			<h2>Slider part</h2>
			</td>
		</tr>
<!--		<tr>
			<td>Post title:</td>
			<td><input type="text" name="title"></td>
		</tr>
		<tr>
			<td>Post author:</td>
			<td><input type="text" name="author"></td>
		</tr>
		<tr>-->
			<td>Post image:</td>
			<td><input type="file" name="image"></td>
		</tr>
		<!--<tr>
			<td>Post content:</td>
			<td><textarea name="content" cols="30" rows="20"></textarea> </td>
		</tr>-->
		<tr>
			
			<td align="center" colspan="5"><input type="submit" name="submit" value="Publish Now"></td>
		</tr>
	</table>
	
	</form>
	
	</body>
	</html>
	<?php
	include("../includes/connect.php");
	if(isset($_POST['submit']))
	{
		//$title = $_POST['title'];
		//$date = date('y-m-d');
		//$author = $_POST['author'];
		//$content = $_POST['content'];
		$image_name = $_FILES['image']['name'];
		$image_type = $_FILES['image']['type'];
		$image_size = $_FILES['image']['size'];
		$image_tmp = $_FILES['image']['tmp_name'];
		
		/*if($title =='' or $author =='' or $content == '')
		{
			echo "<script>alert('Any field is empty')</script>";
			exit();
		}*/
		if($image_type=="image/jpeg" or $image_type=="image/png" or $image_type=="image/gif" or $image_type=="image/jpg" )
		{
			if($image_size<=8000000)
			{
					move_uploaded_file($image_tmp,"../images/$image_name");
							$query = "insert into slider (slider_image) values ('$image_name')";
		if(mysql_query($query))
		{
			echo "<script>alert('Picture has been uploaded!!');</script>";
		}
		else
		{
			echo "Not published";
		}

			}
			else
			{
				echo "<script>alert('Image size is larger')</script>";
			}
		}
		else
		{
			echo "<script>alert('Image type is invalid')</script>";
		}
	
	}
	
	?>
<?php } ?>