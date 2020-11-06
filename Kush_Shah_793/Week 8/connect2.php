<?php

  $email = $_POST["email"];
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $bod = $_POST["bod"];
  $phone_number = $_POST["phone_number"];
  $institution_name = $_POST["institution_name"];
  $country = $_POST["country"];
  $password = $_POST["password"];
  $confirm_password = $_POST["confirm_password"];



  // Database connection
  $conn = new mysqli('localhost','root','','signup_page');
  if($conn->connect_error){
    
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
  } 

  else {

    $stmt = $conn->prepare("insert into signup_details(email, first_name, last_name, bod, phone_number,  institution_name, country, password, confirm_password) values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    $stmt->bind_param("sssiissss", $email, $first_name, $last_name, $bod, $phone_number,  $institution_name, $country, $password, $confirm_password);
    
    $execval = $stmt->execute();
    
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
  }
?>