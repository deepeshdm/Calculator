
<?php 
session_start();
include 'connection.php';
if (isset($_POST['loginsubmit'])) {
	$email=$_POST['email'];
	$password=$_POST['password'];
    
    $email_query="SELECT * FROM `registered-users` WHERE email='$email' ";
    $email_fetch=mysqli_query($conn,$email_query);

    $email_count=mysqli_num_rows($email_fetch);

    if ($email_count) {
	$get_password=mysqli_fetch_assoc($email_fetch);
	$database_pass=$get_password['password'];


	$_SESSION['username']=$get_password['username'];
		$decrypt_verify=password_verify($password, $database_pass);

	    if($decrypt_verify){
		echo "login sucessful !";
		?>
     <script >
     	location.replace("home.php");
     </script>

		<?php
	    }else{
		echo " Password incorrect !";
	    }

    }else{
	    echo "NO SUCH EMAIL !";
    }
}

?>

