<?php
include("includes/connect.php");
$query = "select * from slider order by slider_id DESC";
$run = mysql_query($query);
$slides='';
$Indicators='';
$counter=0;

while ($row=mysql_fetch_array($run))
	{
	 
	 $post_id = $row['slider_id'];
	 $image = $row['slider_image'];
	 //$title = $row['pic_title'];
	 
        if($counter == 0)
        {
            $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'" class="active"></li>';
            $slides .= '<div class="item active">
            <img src="images/'.$image.'" alt="" />
            <div class="carousel-caption">
              
                       
            </div>
          </div>';

        }
		else
        {
            $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'"></li>';
            $slides .= '<div class="item">
            <img src="images/'.$image.'" alt="" />
            <div class="carousel-caption">
              
                       
            </div>
          </div>';
        }
        $counter++;
    }
	 
	 
?>
<?php include("templates/first.php");?>
<?php include("templates/second.php");?>
<?php include("templates/third.php"); ?>
<?php include("templates/fourth.php"); ?>

		