<?php
session_start();
//Connect to Postgresql database
 $db = pg_connect("host=localhost port=5432 dbname=Babble user=postgres password=123456789");

 if(!$db){
    die ("Connection failed: " . pg_last_error());
 }

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //Getting data from registration form
  $firstname = $_POST["firstName"];
  $lastname = $_POST["lastName"];
  $email = $_POST["email"];
  $date = $_POST["date"];
  $number = $_POST["number"];
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
  $gender = $_POST["gender"];


  //User form validation
if( empty($firstname) || empty($lastname) || empty($email) || empty($date) || empty($number) || empty($password)){
    echo "All fields are required.";
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format.";
    exit;
}

// if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$#!%*?&])[A-Za-z\d@$#!%*?&]{8,}$/", $password)) {
//     echo "Password must be at least 8 characters long and contain at least one lowercase letter, one uppercase letter, one number, and one special character.";
//     exit;
// }

//Insert User into database
$query = "INSERT INTO users (first_name, last_name, email, date_of_birth, phone_number, password, gender) 
VALUES ('$firstname', '$lastname', '$email', '$date', '$number', '$password', '$gender')";

$result = pg_query($db, $query);

if(!$result){
    die("Query failed: " . pg_last_error());
}
else{
    echo "Registration Successful";    
}

//Redirect tologin page
$_SESSION["Registration Successful"] = true;
header("Location: ../../templates/login.php ");
}
else{
    echo "Invalid Request.";
}


pg_close($db);