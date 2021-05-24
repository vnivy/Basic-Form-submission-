<?php
// $username = filter_input(INPUT_POST, 'username');
// $password = filter_input(INPUT_POST, 'password');
// if (!empty($username)){
// if (!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "medall";
// Create connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$age = $_POST['age'];

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO account(name,email,phone,gender,age) values ('$name','$email','$phone','$gender','$age')";

// $sql = "INSERT into shipping(country,first_name,last_name,company_name,address_val,state_val,zip,email_address,phone)
// values ('$country','$first_name','$last_name','$company_name','$address_val','$state_val','$zip','$email_address','$phone')";

if ($conn->query($sql) === TRUE) {
  $message = "New record created successfully";
} else {
    $message = "Connection error" .$conn->error;
}

echo $message;
$conn->close();
?>
