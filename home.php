<?php  session_start();
if (!isset($_SESSION['username'])) {
	echo " You are logged out !";
	header('location:login.php');
}


 ?>
<!DOCTYPE html>
<html>
<style type="text/css">
h1{
	align-content: center;
	padding-left: 26%;
	 padding-top: 12%; 
	font-size: 100px;
	font-family: cursive;
}
body {
	background-color: #8EC5FC;
background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);
}	

</style>
<body>
	<button> <a href="logout.php"> LOGOUT </a> </button>
<h1> Hello <?php echo $_SESSION['username']; ?> </h1>
</body>
</html>