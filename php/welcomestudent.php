<?php 
$db = mysqli_connect('localhost', 'root', '', 'cs-unplugged'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CS Unplugged</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <style>
 body {
     background-repeat:repeat;
     font-family: verdana;
     color: white;
     <!--background-size: cover;-->
    }
  
   .container{
  width: 100%; 
  font-size: 18px;
  padding: 10px 50px 50px 50px;
  }
   
   .buttons{
   	 width: 45%; 
  	font-size: 18px;
  	margin: auto;
  	text-align: center;
  	padding-top: 50px;
  	padding-bottom: 90px;
   }
  	.container li{
  		padding-top: 10px;
  		padding-bottom: 10px;

  	}
  


   .quiz, .score, .logout, .video{
  width: 45%;
  color: white;
  padding: 10px 10px;
  margin-bottom: 30px;
  border: solid;
  border-radius: 5px;
  cursor: pointer;
  background-color: grey;
}
   button:hover {
  background-color: #3d3c61;
 }

 </style>

 
<body background= "https://linkbookmarking.com/wp-content/uploads/2018/08/high_quality_wallpaper_HD_1080_IDS_1018067.jpg">
<hr>
<h1 class="heading" style="text-align: center"> Student's dashboard</h1>
<hr>

<div class="container">
<h3 style="text-align: center"> Welcome! </h3>
<div class="buttons">
				<a href="quiz.php"><button type="submit" class="quiz">Take Quiz</button></a> <br>
				<form method="post" enctype="multipart/form-data" action="video_s.php">
        <button class ="video" type="submit" value="Show" name="disp">Watch Videos</button>
        </form>
        <button  class="score" onclick="shownotif()">View Notifications</button>
        <div id="notifications" class = "notifications" style="display: none;">
        	<table align="center" border="1">
        	<tr>
		<th>Sno.</th>
		<th>Video Name</th>
			</tr>
			<?php $query=mysqli_query($db,"select * from video");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
<tr>
<td><?php echo $cnt;?></td>
<td><?php echo $row['video_name'];?></td>
</tr>
<?php $cnt=$cnt+1;
} ?>
</table>
        </div> <br>
				<a href="logout.php"><button  class="logout">Log out</button></a>
			</div>	
</div>

</body>
<script type="text/javascript">
  	function shownotif(){
  		document.getElementById("notifications").style.display = "block";
  		var val = "<?php echo $cnt ?>";
  		val = val - 1;
  		alert(val + " videos added");
  	}
  </script>
  </html>