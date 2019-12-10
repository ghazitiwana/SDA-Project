<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
 <style>
   body {
     font-family: verdana;
     <!--background-size: cover;-->
    }

   .container{
  width: 500px; 
  font-size: 20px;
  padding: 80px 50px 50px 50px;

  
  }
  input[type=text], input[type=password]{
  width: 100%;
  margin: 5px 0 22px 0;
  padding: 20px 8px;
  border: solid;
  background: #f1f1f1;
  color: black;
  border-radius: 10px;
  font-family: verdana;
  font-size: 16px;
}
      
  button {
  color: white;
  padding: 14px  10px;
  margin: 8px 0px;
  border: solid;
  border-radius: 5px;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
}

.loginbtn {
  background-color: #590C0C;
  float: left;
  width: 45%;
}

.cancelbtn{
  background-color: black;
  float: right;
  width: 45%;
}


 button:hover {
  opacity: 1;
 }

 #serrorpassword, #serroruser{
  font-size: 15px;
  font-family: verdana;
 }


  form p {
    font-size: 15px;
    text-align: center;
  }

  form{
    background-color: rgba(0,0,0,0.8);
    color: white;
    border:2px solid #590C0C;
    border-radius:8px;
    padding: 30px;

  }


 .heading{
  padding: 0px 80px 0px 80px; 
  color: white;
  font-weight: bold;
  font-family: verdana;
  text-align: center;
 }


  </style>

<body background="https://i.pinimg.com/originals/75/c7/86/75c7864105801544a5628a9772394dd1.jpg">

<hr>
   <h3 class="heading"> Login </h3>  
  <hr>
<div class="container">
 <form id="login" action="loginprocess.php" method="POST">
                    <fieldset>
                        
                        <div class="form-group">
                            <label>Nickname/Username</label>
                            <input type="text" class="form-control" id="username" name="user" placeholder="Enter Username">
                            <span id="erroruser" class="text-danger font-weight-bold"> </span>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="Password" class="form-control" id="password" name="password" placeholder="Enter Password">
                            <span id="errorpassword" class="text-danger font-weight-bold"> </span>
                        </div>
                        <p>Don't have an account? <a href="#registerhead" onclick="viewRegister()"> Register now </a></p>
                        <div class="clearfix">
                            <button type="button" class="cancelbtn">Cancel</button>
                            <button type="submit" class="loginbtn">Login</button>
                        </div>
                    </fieldset>
 </form>
</div>                
</body>
</html>