<?php
//Connect to Postgresql database
$db = pg_connect("host=localhost port=5432 dbname=Babble user=postgres password=123456789");

if(!$db){
    die("Query failed: " . pg_last_error());
}

if($_SERVER["REQUEST_METHOD"] = $_POST){
    //Getting data from login form
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (empty($email) || empty($password)) {
        echo "Both username and password are required.";
        exit;
    }

    //Query to get user from database
    $query ="SELECT * FROM users WHERE email = '$email'";
    $result = pg_query($db, $query);

    if($result){
        $user = pg_fetch_assoc($result);

        //Password Verification
        if(password_verify($password, $user['password'])){
            session_start();

            //Store users name in session
            $_SESSION[$user_name] = $user['name'];

            //Redireting to the chat page
            header("Location: ../../public/chat.php");
        }
        else{
            echo "Invalid email or password";
        }
    }
    else{
        echo "Error executing query";
    }
}
?>