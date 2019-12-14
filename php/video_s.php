<?php

error_reporting(1);

$conn=mysqli_connect("localhost","root","");

if (!$conn){ 
	echo "Not Connected";
	 }
if(!mysqli_select_db($conn, 'cs-unplugged')){
 echo "Database Not Selected";
}

extract($_POST);


$target_dir = "Videos/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$query=mysqli_query($conn,"select * from video");
$num=mysqli_num_rows($query);
if($disp)

{



	while($all_video=mysqli_fetch_assoc($query))

	{
?>
	 
	 <video width="300" height="200" controls>
	<source src="<?php echo $all_video['video_name']; ?>" type="video/mp4">
	</video> 
	
	<?php } } ?>