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
  


   .quiz, .score, .logout{
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

 
<body background= "https://i.pinimg.com/originals/af/e2/ba/afe2baacb56c97a2e8b87fc177e94055.jpg" style="margin:auto">
<hr>
<h1 class="heading" style="text-align: center"> Teacher's dashboard</h1>
<hr>

<div class="container">
<h3 style="text-align: center"> Welcome! </h3>
<div class="buttons">
        <hr>
        <form method="post" enctype="multipart/form-data" action="video.php">
        <input type="file" name="fileToUpload"/ accept="video/*" style="margin-left: 160px;"><br><br>
        <button type="submit" value="Upload Video" name="upd" class="quiz">Upload Video</button> <br>
        </form>
        <hr>
				<button  class="score">Check watch time</button><br>
				<a href="logout.php"><button  class="logout">Log out</button></a>
			
			</div>	
</div>

</body>