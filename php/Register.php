<?php include('server.php'); ?>

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
     <!--background-size: cover;-->
    }
  
   .container{
  width: 500px; 
  font-size: 20px;
  padding: 10px 50px 50px 50px;

  
  }
  input[type=text], input[type=password], input[type=email], input[type=numeric] {
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

.signupbtn{
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

 #errorname, #erroremail, #errornum, #errorpass, #errorcon, #errorpassword, #erroruser, #serrorname, #serroremail, #serrornum, #serrorpass, #serrorcon, #serrorpassword, #serroruser{
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
  font-weight: bolder;
  font-family: verdana;
 }

 #teacherhead, #teacher-form{
  display: none;
 }

 #teacherhead, #studenthead{
  text-align: center;
  color: white;
 }
 #account{
  font-size: 5px;
 }
  </style>

 <script type="text/javascript">

 	  function RegisteredUser() {
 	  	this.construct = function(builder) {
 	  		builder.step1();
 	  		builder.step2();
 	  		builder.step3();
        builder.step4();
 	  		return builder.get();

 	  	}
 	  }

    function PremiumAccount() {
      this.getAccountType = function() {
        return 'Premium';
      }
    }

    function FreeAccount() {
      this.getAccountType = function() {
        return 'Free';
      }
    }

 	  function TeacherBuilder(accountType) {
      this.user = null;

      this.step1 = function () {
        this.user = new Teacher(accountType);
      };

      this.step2 = function () {
        this.user.addName();
        this.user.addEmail();
      };

      this.step3 = function () {
        this.user.addPass();
        this.user.checkPass();
      };

      this.step4 = function () {
        this.user.addType();
        this.user.alertify();
      };

      this.get = function() {
        return this.user;
      };
    }

    function Teacher(accountType) {
        this.name = null;
        this.email = null;
        this.password = null;
        this.conpassword = null;
        this.type = null;

        this.addName = function() {
          this.name = document.getElementById('fname').value;
        };

        this.addEmail = function() {
          this.email = document.getElementById('email').value;
        };

        this.addPass = function() {
          this.password = document.getElementById('pass').value;
        };

        this.checkPass = function() {
          this.conpassword = document.getElementById('conpass').value;
        };

        this.addType = function() {
          this.type = accountType.getAccountType();
        };

        this.alertify = function() {
          if (this.password==this.conpassword) {
          alert(this.type + " Teacher account created with name " + this.name + " and email " + this.email)
        }
         else { 
          alert("User not created")
         }
        }; 

    }

function StudentBuilder(accountType) {
      this.user = null;

      this.step1 = function () {
        this.user = new Student(accountType);
      };

      this.step2 = function () {
        this.user.addName();
        this.user.addEmail();
      };

      this.step3 = function () {
        this.user.addPass();
        this.user.checkPass();
      };

      this.step4 = function () {
        this.user.addType();
        this.user.alertify();
      };

      this.get = function() {
        return this.user;
      };
    }

    function Student(accountType) {
        this.name = null;
        this.email = null;
        this.password = null;
        this.conpassword = null;
        this.type = null;

        this.addName = function() {
          this.name = document.getElementById('sname').value;
        };

        this.addEmail = function() {
          this.email = document.getElementById('semail').value;
        };

        this.addPass = function() {
          this.password = document.getElementById('spass').value;
        };

        this.checkPass = function() {
          this.conpassword = document.getElementById('sconpass').value;
        };

        this.addType = function() {
          this.type = accountType.getAccountType();
        };

        this.alertify = function() {
          if (this.password==this.conpassword) {
          alert(this.type + " Student account created with name " + this.name + " and email " + this.email)
        }
         else { 
          alert("User not created")
         }
        }; 

    }

     function runTeacher() {
      var registereduser = new RegisteredUser();
      if (document.getElementById('accountp').checked) 
      {
      var premiumAccount = new PremiumAccount;  
      var userBuilder = new TeacherBuilder(premiumAccount); 
    }
      else if (document.getElementById('accountf').checked) 
      {
      var freeAccount = new FreeAccount;  
      var userBuilder = new TeacherBuilder(freeAccount); 
    }
      var user = registereduser.construct(userBuilder);
    }


    function runStudent() {
      var registereduser = new RegisteredUser();
      if (document.getElementById('saccountp').checked) 
      {
      var premiumAccount = new PremiumAccount;  
      var userBuilder = new StudentBuilder(premiumAccount); 
    }
      else if (document.getElementById('saccountf').checked) 
      {
      var freeAccount = new FreeAccount;  
      var userBuilder = new StudentBuilder(freeAccount); 
    }
      var user = registereduser.construct(userBuilder);
    }


      function teacherValidation(){

        var fname = document.getElementById('fname').value;
        var email = document.getElementById('email').value;
        var pass = document.getElementById('pass').value;
        var conpass = document.getElementById('conpass').value;
        
        var namecheck = /^[a-zA-Z ]{4,32}$/;
        var passcheck = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
        var emailcheck = /^[a-zA-Z_0-9]{3,}@[a-zA-Z]{3,}[.]{1}[a-zA-Z.]{2,6}$/;

        var f1 = true;
        var f2 = true;
        var f3 = true;
        var f4 = true;
        

        if(namecheck.test(fname)){
          document.getElementById("fname").style.borderColor="green";
          document.getElementById('errorname').innerHTML = "";
        } else{
          if(fname==""){
            document.getElementById("fname").style.borderColor="red";
            document.getElementById('errorname').innerHTML="Required field, please enter name";
          }
          else{
            document.getElementById("fname").style.borderColor="red";
            document.getElementById('errorname').innerHTML="Invalid name, please type again";
          }
          f1 = false;
        }

        if(passcheck.test(pass)){
          document.getElementById("pass").style.borderColor="green";
          document.getElementById('errorpass').innerHTML = "";
        } else{
          if(pass==""){
            document.getElementById("pass").style.borderColor="red";
            document.getElementById('errorpass').innerHTML="Required field, please enter password";
          }
          else{
            document.getElementById("pass").style.borderColor="red";
            document.getElementById('errorpass').innerHTML="Invalid password, it must be at least 6 characters long";
          }
          f2 = false;
        }

        if(conpass==""){
            document.getElementById("conpass").style.borderColor="red";
            document.getElementById('errorcon').innerHTML="Required field, please enter password to confirm";
            f3 = false;
          } else{
            if(pass == conpass){
              document.getElementById("conpass").style.borderColor="green";
              document.getElementById('errorcon').innerHTML = "";
            }
            else{
              document.getElementById("conpass").style.borderColor="red";
              document.getElementById('errorcon').innerHTML="Password does not match ";
              f3 = false;
            }
        }

        if(emailcheck.test(email)){
          document.getElementById("email").style.borderColor="green";
          document.getElementById('erroremail').innerHTML = "";
        } else{
          if(email==""){
            document.getElementById("email").style.borderColor="red";
            document.getElementById('erroremail').innerHTML="Required field, please enter email";
          }
          else{
            document.getElementById("email").style.borderColor="red";
            document.getElementById('erroremail').innerHTML="Invalid email, write in the format example@gmail.com ";
          }
          f4 = false;
        }

        return f1 && f2 && f3 && f4;
      }


       function studentValidation(){

        var sfname = document.getElementById('sname').value;
        var semail = document.getElementById('semail').value;
        var spass = document.getElementById('spass').value;
        var sconpass = document.getElementById('sconpass').value;
        
        var snamecheck = /^[a-zA-Z ]{4,32}$/;
        var spasscheck = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
        var semailcheck = /^[a-zA-Z_0-9]{3,}@[a-zA-Z]{3,}[.]{1}[a-zA-Z.]{2,6}$/;

        var s1 = true;
        var s2 = true;
        var s3 = true;
        var s4 = true;
        

        if(snamecheck.test(sfname)){
          document.getElementById("sname").style.borderColor="green";
          document.getElementById('serrorname').innerHTML = "";
        } else{
          if(sfname==""){
            document.getElementById("sname").style.borderColor="red";
            document.getElementById('serrorname').innerHTML="Required field, please enter name";
          }
          else{
            document.getElementById("sname").style.borderColor="red";
            document.getElementById('serrorname').innerHTML="Invalid name, please type again";
          }
          s1 = false;
        }

        if(spasscheck.test(spass)){
          document.getElementById("spass").style.borderColor="green";
          document.getElementById('serrorpass').innerHTML = "";
        } else{
          if(spass==""){
            document.getElementById("spass").style.borderColor="red";
            document.getElementById('serrorpass').innerHTML="Required field, please enter password";
          }
          else{
            document.getElementById("spass").style.borderColor="red";
            document.getElementById('serrorpass').innerHTML="Invalid password, it must be at least 6 characters long";
          }
          s2 = false;
        }

        if(sconpass==""){
            document.getElementById("sconpass").style.borderColor="red";
            document.getElementById('serrorcon').innerHTML="Required field, please enter password to confirm";
            s3 = false;
          } else{
            if(spass == sconpass){
              document.getElementById("sconpass").style.borderColor="green";
              document.getElementById('serrorcon').innerHTML = "";
            }
            else{
              document.getElementById("sconpass").style.borderColor="red";
              document.getElementById('serrorcon').innerHTML="Password does not match ";
              s3 = false;
            }
        }

        if(semailcheck.test(semail)){
          document.getElementById("semail").style.borderColor="green";
          document.getElementById('serroremail').innerHTML = "";
        } else{
          if(semail==""){
            document.getElementById("semail").style.borderColor="red";
            document.getElementById('serroremail').innerHTML="Required field, please enter email";
          }
          else{
            document.getElementById("semail").style.borderColor="red";
            document.getElementById('serroremail').innerHTML="Invalid email, write in the format example@gmail.com ";
          }
          s4 = false;
        }

        return s1 && s2 && s3 && s4;
      }



       function viewTeacher() {
            document.getElementById('teacherhead').setAttribute('style', 'display:block');
            document.getElementById('teacher-form').setAttribute('style', 'display:block');
            document.getElementById('student-form').setAttribute('style', 'display:none');
            document.getElementById('studenthead').setAttribute('style', 'display:none');
        }

         function viewStudent() {
            document.getElementById('teacherhead').setAttribute('style', 'display:none');
            document.getElementById('teacher-form').setAttribute('style', 'display:none');
            document.getElementById('student-form').setAttribute('style', 'display:block');
            document.getElementById('studenthead').setAttribute('style', 'display:block');
        }


</script>
<body background= "http://www.baltana.com/files/wallpapers-13/Abstract-Black-Background-Wallpaper-Full-HD-34047.jpg">
<hr>
<h1 class="heading" style="text-align: center"> CS Unplugged</h1>
<hr>

   <h2 id="studenthead"> Student </h2>
    <h2 id="teacherhead"> Teacher </h2>
  <hr>

<div class="container"> 
 <form method = "post" name="teacher-form" id="teacher-form" onsubmit="return teacherValidation() && runTeacher()">
 
  <div class="form-group">
    <label title="Alphabets only, at least 4 characters long">Full Name </label>
      <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter name here">
      <span id="errorname" class="text-danger font-weight-bold"> </span>
    </div>
 
  <div class="form-group">
    <label>Email Address</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="example@gmail.com">
      <span id="erroremail" class="text-danger font-weight-bold"> </span>
    </div>
  

  <div class="form-group">
    <label title="Password must be at least 6 characters long, must contain 1 alphanumeric and 1 special character">Password</label>
      <input type="Password" class="form-control" id="pass" name="pass" placeholder="Enter Password"> 
      <span id="errorpass" class="text-danger font-weight-bold"> </span>
    </div>

    <div class="form-group">
    <label>Confirm Password</label>
      <input type="Password" class="form-control" id="conpass" name="conpass" placeholder="Enter Password Again"> 
      <span id="errorcon" class="text-danger font-weight-bold"> </span>
    </div>

    <div class="form-group">
    <label>Designation</label>
      <select class="form-control">
        <option>Assistant professor</option>
        <option>Lecturer</option>
      </select>
     </div>

    <div class="form-group">
    <label>Account type</label><br>
      <input type="radio" id="accountp" name="account" value="Premium"> Premium Account<br>
      <input type="radio" id="accountf" name="account" value="Free"> Free Account<br> 
    </div>


    <p>Are you a student? <a href="#studenthead" onclick="viewStudent()"> Sign up as a student </a></p>

   <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" name = "teachersignup" class="signupbtn">Sign Up</button>
   </div> 
     
  </form>




   <form method = "post" id="student-form" onsubmit="return studentValidation() && runStudent()">
 
  <div class="form-group">
    <label title="Alphabets only, at least 4 characters long">Full Name </label>
      <input type="text" class="form-control" id="sname" name="sname" placeholder="Enter name here">
      <span id="serrorname" class="text-danger font-weight-bold"> </span>
    </div>
 
  <div class="form-group">
    <label>Email Address</label>
      <input type="text" class="form-control" id="semail" name="semail" placeholder="example@gmail.com">
      <span id="serroremail" class="text-danger font-weight-bold"> </span>
    </div>
  

  <div class="form-group">
    <label title="Password must be at least 6 characters long, must contain 1 alphanumeric and 1 special character">Password</label>
      <input type="Password" class="form-control" id="spass" name="spass" placeholder="Enter Password"> 
      <span id="serrorpass" class="text-danger font-weight-bold"> </span>
    </div>

    <div class="form-group">
    <label>Confirm Password</label>
      <input type="Password" class="form-control" id="sconpass" name="sconpass" placeholder="Enter Password Again"> 
      <span id="serrorcon" class="text-danger font-weight-bold"> </span>
    </div>

     <div class="form-group">
    <label>Education</label>
      <select class="form-control">
        <option>Primary</option>
        <option>Secondary</option>
        <option>Higher</option>
      </select>
     </div>

     <div class="form-group">
    <label>Account type</label><br>
      <input type="radio" id="saccountp" name="saccount" value="Premium"> Premium Account<br>
      <input type="radio" id="saccountf" name="saccount" value="Free"> Free Account<br> 
    </div>

    <p>Are you a teacher? <a href="#teacherhead" onclick="viewTeacher()"> Sign up as a teacher </a></p>

   <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" name="studentsignup" class="signupbtn">Sign Up</button>
   </div> 
     
  </form>

</div>
</div>
</body>