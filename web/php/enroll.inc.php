<?php

session_start();

require 'dbh.inc.php';
if(isset($_POST['cplusplus'])) {
	echo '<script>alert("c++")</script>';

	$sql = "INSERT into courses_(course_name, u_email) Values(?,?);";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("Location: ../cplusplus.php?error");
		exit();
	}
	else{

		$course = 'cplusplus';

		mysqli_stmt_bind_param($stmt,"ss", $course,$_SESSION['uEmail']);
		mysqli_stmt_execute($stmt);
		header("Location: ../cplusplus.php?enroll=success");
		exit();
	}

}

if(isset($_POST['python'])) {
	echo '<script>alert("c++")</script>';

	$sql = "INSERT into courses_(course_name, u_email) Values(?,?);";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("Location: ../python.php?error");
		exit();
	}
	else{

		$course = 'python';

		mysqli_stmt_bind_param($stmt,"ss", $course,$_SESSION['uEmail']);
		mysqli_stmt_execute($stmt);
		header("Location: ../python.php?enroll=success");
		exit();
	}

}

if(isset($_POST['java'])) {
	echo '<script>alert("c++")</script>';

	$sql = "INSERT into courses_(course_name, u_email) Values(?,?);";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("Location: ../java.php?error");
		exit();
	}
	else{

		$course = 'java';

		mysqli_stmt_bind_param($stmt,"ss", $course,$_SESSION['uEmail']);
		mysqli_stmt_execute($stmt);
		header("Location: ../java.php?enroll=success");
		exit();
	}

}

if(isset($_POST['machinelearning'])) {
	echo '<script>alert("c++")</script>';

	$sql = "INSERT into courses_(course_name, u_email) Values(?,?);";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("Location: ../machinelearning.php?error");
		exit();
	}
	else{

		$course = 'machinelearning';

		mysqli_stmt_bind_param($stmt,"ss", $course,$_SESSION['uEmail']);
		mysqli_stmt_execute($stmt);
		header("Location: ../machinelearning.php?enroll=success");
		exit();
	}

}

if(isset($_POST['cryptography'])) {
	echo '<script>alert("c++")</script>';

	$sql = "INSERT into courses_(course_name, u_email) Values(?,?);";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("Location: ../cryptography.php?error");
		exit();
	}
	else{

		$course = 'cryptography';

		mysqli_stmt_bind_param($stmt,"ss", $course,$_SESSION['uEmail']);
		mysqli_stmt_execute($stmt);
		header("Location: ../cryptography.php?enroll=success");
		exit();
	}

}

if(isset($_POST['gamedevelopment'])) {
	echo '<script>alert("c++")</script>';

	$sql = "INSERT into courses_(course_name, u_email) Values(?,?);";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("Location: ../gamedevelopment.php?error");
		exit();
	}
	else{

		$course = 'gamedevelopment';

		mysqli_stmt_bind_param($stmt,"ss", $course,$_SESSION['uEmail']);
		mysqli_stmt_execute($stmt);
		header("Location: ../gamedevelopment.php?enroll=success");
		exit();
	}

}

if(isset($_POST['dsalso'])) {
	echo '<script>alert("c++")</script>';

	$sql = "INSERT into courses_(course_name, u_email) Values(?,?);";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("Location: ../dsalso.php?error");
		exit();
	}
	else{

		$course = 'dsalso';

		mysqli_stmt_bind_param($stmt,"ss", $course,$_SESSION['uEmail']);
		mysqli_stmt_execute($stmt);
		header("Location: ../dsalso.php?enroll=success");
		exit();
	}

}

if(isset($_POST['mobile'])) {
	echo '<script>alert("c++")</script>';

	$sql = "INSERT into courses_(course_name, u_email) Values(?,?);";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("Location: ../mobile.php?error");
		exit();
	}
	else{

		$course = 'mobile';

		mysqli_stmt_bind_param($stmt,"ss", $course,$_SESSION['uEmail']);
		mysqli_stmt_execute($stmt);
		header("Location: ../mobile.php?enroll=success");
		exit();
	}

}

if(isset($_POST['dbms'])) {
	echo '<script>alert("c++")</script>';

	$sql = "INSERT into courses_(course_name, u_email) Values(?,?);";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("Location: ../dbms.php?error");
		exit();
	}
	else{

		$course = 'dbms';

		mysqli_stmt_bind_param($stmt,"ss", $course,$_SESSION['uEmail']);
		mysqli_stmt_execute($stmt);
		header("Location: ../dbms.php?enroll=success");
		exit();
	}

}