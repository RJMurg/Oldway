<?php
require_once 'database.php';
session_start();

$name = $_POST["name"];
unset($_SESSION["error_msg"]);

$result = $conn->execute_query("SELECT * FROM users WHERE name LIKE '$name'");

if($result->num_rows == 1){
    $valid_details = false;
    $funny_thing = "";
    $row = $result->fetch_assoc();

    if(password_verify($_POST["password"], $row["password"])){
        $valid_details = true;
        $_SESSION["name"] = $name;
        // Note that a cookie should be set here that contains a randomly generated string to prevent account immitation.

        header('Location: index.php');
    }

    if(!$valid_details){
        $_SESSION["error_msg"] = "Incorrect password!";
        header('Location: index.php');
    }
}
else{
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $result = $conn->query("INSERT INTO users (name, password) VALUES('$name', '$password');");

    $_SESSION["name"] = $name;

    header('Location: index.php');
}
?>
