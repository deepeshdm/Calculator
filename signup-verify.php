<?php session_start() ?>

<?php 
include_once('connection.php');

if (isset($_POST['submit'])) {
	
$username=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

//password encryption
$pass=password_hash($password, PASSWORD_BCRYPT);
$cpass=password_hash($cpassword, PASSWORD_BCRYPT);

$emailquery="SELECT * FROM `registered-users` WHERE email='$email' ";

$emailresult=mysqli_query($conn,$emailquery);
if (mysqli_num_rows($emailresult)>0) {
echo " Email already exists! try to login. ";
exit();	
}else{
	if ($password===$cpassword) {
	$insertquery=" INSERT INTO `registered-users`(`username`, `email`, `phone`, `password`) VALUES('$username','$email','$phone','$pass')";
    $inserting=mysqli_query($conn,$insertquery);
    if ($inserting) {
        echo " ACCOUNT CREATED SUCESSFULLY ";
    }else{
    	echo " DATA NOT INSERTED , TRY AGAIN.";
    }

		}else{
		echo "Password not mathcing !";
	}
}


}



?>






