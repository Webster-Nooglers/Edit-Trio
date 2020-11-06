<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "signup_page";

// Create connection
$conn = new mysqli($servername,$username,$password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

//echo "Connection";
if(isset ($_POST['Submit']))
{
  $email = $_POST["email"];
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $bod = $_POST["bod"];
  $phone_number = $_POST["phone_number"];
  $institution_name = $_POST["institution_name"];
  $country = $_POST["country"];
  $password = $_POST["password"];
  $confirm_password = $_POST["confirm_password"];
  

    $qry = "INSERT INTO signup_details  (email , first_name , last_name , bod , phone_number,  institution_name, country, password, confirm_password ) VALUES ('$email','$Fname','$Lname','$bod','$phone_number','$institution_name','$country','$password','$confirm_password')";
   
  $result = mysqli_query($conn,$qry) or die(error);
  if($result!=null)
  {
    echo "New record created successfully";
    header('location: index.html');
  }
  else
  { 
    echo "Error: " . $result . "<br>" . $conn->error;
  }
  


}


?>