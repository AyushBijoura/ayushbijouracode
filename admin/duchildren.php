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
<html>
	<head>
		<title>Admin Panel</title>
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
	<?php if(isset($_GET['view'])){ ?>
	<table width ="800" align="center" border="3">
	<tr>
		<td align="center" bgcolor="orange" colspan="9"><h1>View all posts</h1></td>
	<tr>
		<th>S.no</th>
		<th>Image</th>
		<th>Edit</th>
		<th>Delete</th>
		
	</tr>
	<?php
		include("includes/connect.php");
		
		if(isset($_GET['view']))
		{
		$i =1;		
		$query ="select * from children order by child_id DESC";
			$run = mysql_query($query);
			while($row=mysql_fetch_array($run))
			{
				$id = $row['child_id'];
				$image = $row['child_image'];
			
			
			
	?>
	
	<tr align="center">
		<td><?php echo $i++?></td>
		<td><img src="../upload_child/<?php echo $image?>" width="100" height="100"></td>
		<td><a href="edit6.php?edit=<?php echo $id; ?>">Edit</a></td>
		<td><a href="deletechild.php?del=<?php echo $id?>">Delete</td>
		</tr>

	<?php }}}?>

	</table>
		
		</body>
	</html>
	<?php } ?>