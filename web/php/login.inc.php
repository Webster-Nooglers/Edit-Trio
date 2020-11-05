<?php


if(isset($_POST['login-submit'])) { 	

	 require 'dbh.inc.php';

	 $wemail = $_POST['email'];
	 $wpswd = $_POST['password'];



	 if(empty($wemail) || empty($wpswd)){

	 	header("Location: ../signup.php?error=emptyfields&email=".$wemail);
	 	exit();
	 }
	 elseif (!filter_var($wemail, FILTER_VALIDATE_EMAIL)) {
	 	header("Location: ../signup.php?error=invalidEmail");
	 	exit();
	 }
	 else{

	 	$sql = "Select * from users_ where email=?;";
	 	$stmt = mysqli_stmt_init($conn);
	 	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 		header("Location: ../login.php?error=sqlError");
	 		exit();
	 	}

	 	else {

	 		mysqli_stmt_bind_param($stmt, "s", $wemail);
	 		mysqli_stmt_execute($stmt);
	 		$result = mysqli_stmt_get_result($stmt);

	 		if ($row = mysqli_fetch_assoc($result)) {
	 			$hashpwd = password_hash($wpswd, PASSWORD_DEFAULT);
	 			$pwd_check = password_verify($wpswd, $row['pswd']); 

	 			if($pwd_check == false){
	 				header("Location: ../login.php?error=wrongPassword");
	 				exit();
	 			}
	 			else if($pwd_check == true) {
	 				session_start();
	 				$_SESSION['uEmail'] = $row['email'];
	 				header("Location: ../index.php?login=success");
	 				exit();

	 			}

	 			else {
	 				header("Location: ../login.php?error=unkownerror");
	 				exit();

	 			}
	 			


	 		}
	 		else {
	 			header("Location: ../login.php?error=nouser");
	 			exit();
	 		}


	 	}
	 }

	 mysqli_stmt_close($stmt);
	 mysqli_stmt_close($conn);

}

else {
	header("Location: ../index.html");
	exit();
}