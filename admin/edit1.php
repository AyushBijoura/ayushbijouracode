


<?php
include("index.php");
include("includes/connect.php");
$edit_id = @$_GET['edit'];

$query = "select * from fashionwomen where fwomen_id = '$edit_id'";

$run = mysql_query($query);
		while($row=mysql_fetch_array($run))
			{
				
				$edit_id1 = $row['fwomen_id'];
				$image = $row['fwomen_image'];
	
			
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Insert new photo</title>
	</head>
	<body>
	<form method="post" action="edit1.php?edit_form=<?php echo $edit_id1 ;?>" enctype="multipart/form-data">
	<table align="center" border="1" width="800">
		<tr>
			<td align="center" colspan="5" bgcolor="yellow">
			<h1>Edit New Photo Here</h1>
			<h2>Fashion women part</h2>
			</td>
		</tr>
		<tr>
	<td>Post image:</td>
			<td><input type="file" name="image"></td>
			<img src="../upload_fwomen/<?php echo $image;?>" width="100" height="100">
		</tr>
		<tr>
			
			<td align="center" colspan="5"><input type="submit" name="update" value="Update Now"></td>
		</tr>
			<?php } ?>
	</table>
	
	
	</form>
	
	</body>
	</html>
<?php
if(isset($_POST['update']))
{
	$update_id = $_GET['edit_form'];
	$post_image = $_FILES['image']['name'];
	$post_image_type = $_FILES['image']['type'];
	$post_image_size = $_FILES['image']['size'];
	$post_image_tmp = $_FILES['image']['tmp_name'];
			if($post_image_type=="image/jpeg" or $post_image_type=="image/png" or $post_image_type=="image/gif" or $post_image_type=="image/jpg" )
		{
	if($post_image_size<=9000000)
			{
			
						move_uploaded_file($post_image_tmp,"../upload_fwomen/$post_image");
						$update_query="update fashionwomen set fwomen_image='$post_image'where fwomen_id='$update_id'";
						if(mysql_query($update_query))
						{
							echo "<script>alert('Post updated');</script>;";
							echo "<script>window.open('index.php','_self');</script>";
						}	
			}
			else
			{
				echo "<script>alert('Image size is larger')</script>";
			}
			
		}
			else
				{
				echo "<script>alert('Image type is invalid');</script>";
			    echo "<script>window.open('index.php','_self');</script>";
				}

	
		
}

?>
