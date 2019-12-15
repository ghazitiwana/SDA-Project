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
   	 width: 100%; 
  	font-size: 18px;
  	padding-right: 35%;
  	padding-left: 35%;
  	padding-top: 30px;
  	padding-bottom: 90px;
   }
  	.container li{
  		padding-top: 10px;
  		padding-bottom: 10px;

  	}
  

  .submit{
  	float: left;
  }

  .cancel{
  	float: right;
  }

   .submit, .cancel{
  width: 45%;
  color: white;
  padding: 10px 10px;
  border: solid;
  border-radius: 5px;
  cursor: pointer;
  background-color: grey;
}
   button:hover {
  background-color: #3d3c61;
 }

 input[type=radio]{
 margin-right: 15px;
 margin-left: 20px;
 margin-top: 10px;
  
 }

 #error1, #error2, #error3, #error4, #error5 {
 	font-size: 15px;
 }
 </style>

 <script type="text/javascript">
 	
 	function quizValidate(){
 	
 		var f1 = true;
 		var f2 = true;
 		var f3 = true;
 		var f4 = true;
 		var score = 0;

 		if(document.getElementById('ans1').checked){
 			 document.getElementById('error1').innerHTML = "Correct!";
 			 score++;
 		}
 		else {
 			 document.getElementById('error1').innerHTML = "Wrong, try again";
 			 f1 = false;
 			
 		}
 		
 		if(document.getElementById('ans2').checked){
 			 document.getElementById('error2').innerHTML = "Correct!";
 			 score++;
 		}
 		else {
 			 document.getElementById('error2').innerHTML = "Wrong, try again";
 			 f2 = false;
 			 
 		}
 		

 		if(document.getElementById('ans3').checked){
 			 document.getElementById('error3').innerHTML = "Correct!";
 			 score++;
 		}
 		else {
 			 document.getElementById('error3').innerHTML = "Wrong, try again";
 			 f3 = false;
 			
 		}
 		

 		if(document.getElementById('ans4').checked){
 			 document.getElementById('error4').innerHTML = "Correct!";
 			 score++;
 		}
 		else {
 			 document.getElementById('error4').innerHTML = "Wrong, try again";
 			 f4 = false;
 			
 		}
 		

 		if(document.getElementById('ans5').checked){
 			 document.getElementById('error5').innerHTML = "Correct!";
 			 score++;
 		}
 		else {
 			 document.getElementById('error5').innerHTML = "Wrong, try again";
 			 f5 = false;
 			
 		}
 		alert("Correct answers: " + score + " out of 5");
    document.getElementById("quizresult").value = score;
 		return f1 && f2 && f3 && f4 && f5;
 		
 	}
 </script>

<body background= "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTQUn7pa-QlLj1g67uDsHKTXXBLJdTMl9QpKknf8AhfZQF7bQ4G">
<hr>
<h1 class="heading" style="text-align: center"> Modems Unplugged: Quiz</h1>
<hr>

<div class="container">
<div class="row">
	<div class="col-sm-6">
		<form name="quiz" method="POST" onsubmit="return quizValidate()" action="quizsubmit.php">
		<ol>
		   <li>In Modems Unplugged activity, text is coded using ________ <br>
		   	<input type="radio" name="ans1" value="numbers">Letters               
		   	<input type="radio" name="ans1" id="ans1" value="sound">Sound
		   	<input type="radio" name="ans1" value="language">Foreign language <br>
		    <span id="error1" class="text-danger font-weight-bold"> </span></li>
		   <li>High and low beeps represent _______ <br>
		    <input type="radio" name="ans2" id="ans2" value="binary">Binary digits               
		   	<input type="radio" name="ans2" value="music">Music
		   	<input type="radio" name="ans2" value="anxiety">Anxiety <br>
		    <span id="error2" class="text-danger font-weight-bold"> </span></li>
		   <li>If 1 decodes to A, 2 decodes to B and so on…then what does 12 decode to? <br>
		   	<input type="radio" name="ans3" value="D">Letter D               
		   	<input type="radio" name="ans3" id="ans3" value="L">Letter L
		   	<input type="radio" name="ans3" value="M">Letter M <br>
		   	<span id="error3" class="text-danger font-weight-bold"> </span></li>
		   <li>The sounds/notes are in groups of _______ <br>
		    <input type="radio" name="ans4" id="ans4" value="5">5 notes               
		   	<input type="radio" name="ans4" value="6">6 notes
		   	<input type="radio" name="ans4" value="1">1 note <br>
		   	<span id="error4" class="text-danger font-weight-bold"> </span></li>
		   <li>_____ represents a high note and _____ represents a low note respectively. <br>
		    <input type="radio" name="ans5" value="no">0, 0               
		   	<input type="radio" name="ans5" value="0">0, 1
		   	<input type="radio" name="ans5" id="ans5" value="1">1, 0 <br>
		   	<span id="error5" class="text-danger font-weight-bold"> </span></li>
	    </ol> 
      <input id="quizresult" type="number" name="quizresult" value="0" style="visibility: hidden;">
    </div>  
	<div class="col-sm-6">
		 <img src="https://clipartstation.com/wp-content/uploads/2018/10/quiz-clipart-1-1.png" style="margin-top: 60px; margin-left: 80px;">
	</div>

</div>
<div class="buttons">
				<button type="submit" name="quizmarks" class="submit">Submit</button>
				<a href="welcomestudent.php"><button type="button" class="cancel">Cancel</button></a>
			</div>	
</div>
</form>

</body>