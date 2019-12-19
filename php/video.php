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

if($upd)
{
	$fileType = pathinfo($target_file,PATHINFO_EXTENSION);

$video_path=$_FILES['fileToUpload']['name'];

mysqli_query($conn,"insert into video(video_name) values('$video_path')");

move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);

$message = "Video Uploaded";
echo "<script type='text/javascript'>alert('$message');</script>";
echo "<script type='text/javascript'>window.location.href = 'welcometeacher.php';</script>";


}


	<?php } } ?>