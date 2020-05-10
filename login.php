<?php
 session_start();
 ?>

<html> 
<head>
</head>
<body>
	<style type="text/css">

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
		
body{background-color: #8EC5FC;
background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);}
	</style>
	<form align="center" style="padding-top: 11%;" action="login-verify.php" method="post">


<input type="text" name="email" placeholder="Account email" required> <br><br>


<input type="text" name="password" placeholder="Account password" required> <br><br>


<button type="submit" name="loginsubmit"> LOGIN </button> <br><br>


Don't have an account ? <a href="signup.php"> Signup here</a>
</form>
</body>
</html>