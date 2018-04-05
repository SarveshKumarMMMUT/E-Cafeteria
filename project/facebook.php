<?php 
$firstname = $lastname= $email = $remail = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["firstname"]);
  $lastname= test_input($_POST["lastname"]);
  $email = test_input($_POST["email"]);
  $remail = test_input($_POST["remail"]);
  $password = test_input($_POST["password"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 echo "welcome $firstname";





?>