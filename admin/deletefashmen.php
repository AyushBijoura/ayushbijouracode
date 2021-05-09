<?php
session_start();
if(!isset($_SESSION['user_name']))
{
	header("location:login.php");
}
else
{
	

?>

<?php
include("includes/connect.php");
$delete_id = $_GET['del'];

$delete_query = "delete from fashionmen where fmen_id = '$delete_id'";

if(mysql_query($delete_query))
{
	echo "<script>alert('Post has been deleted');</script>";
	echo "<script>window.open('index.php?deleted=A post has been deleted','_self')</script>";
}
?>
<?php } ?>