<!DOCTYPE html>
<html>
<head><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body background="http://eskipaper.com/images/modern-wallpaper-7.jpg">
	<h1 style="text-align: center;color: white">Videos</h1>

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
	 <video id="vid"   controls style="width: 50%;margin-left: 25%">
	<source src="<?php echo $all_video['video_name']; ?>" type="video/mp4">
	</video>
	
	

</body>
<script type="text/javascript">

	var vid = document.getElementById("vid");

	 	vid.onpause = function() {
	 		var videoName = "<?php echo $all_video['video_name']; ?>";
	 		var totalTime = vid.currentTime;
	 		alert(totalTime);
	 		
	 		$.ajax({
         data: {
         	totalTime: totalTime,
         	videoName: videoName
         },
         type: "post",
         url: "inserttime.php",
});
	 	}; 


	 </script>
</html>	
<?php } } ?>