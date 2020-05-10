<?php session_start() ?>
<html> 
<head>
</head>
<body>
	<style type="text/css">
		form{ padding-top: 6%;   }
		body{ background-color: #8EC5FC;
background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);}

button{
  width: 200px;
  height: 40px;
  background-color: DodgerBlue;
  color: white;
}


button:hover{
  width: 197px;
  height: 38px;
  background-color: DodgerBlue;
  color: white;
}

input {
    border: 5px solid white; 
    -webkit-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    -moz-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    padding: 15px;
    background: rgba(255,255,255,0.5);
    margin: 0 0 10px 0;
}

	</style>
	<form align="center" action="signup-verify.php" method="post">

<input type="text" name="username" placeholder="Username" class="userinput" required> <br><br>


<input type="text" name="email" placeholder="Email" class="userinput" required > <br><br>


<input type="text" name="phone" placeholder="Phone number" class="userinput" required > <br><br>


<input type="text" name="password" placeholder="Password" class="userinput" required> <br><br>



<input type="text" name="cpassword" placeholder="Confirm password" class="userinput" required> <br><br>


<button type="submit" name="submit"> Create account </button> <br><br>


already have an account ? <a href="login.php"> Login here</a>
</form>
</body>
</html>