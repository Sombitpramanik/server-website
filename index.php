<?php
require 'config.php';

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM user_datehosting_site_userdata WHERE username = '$username' OR email = '$email'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)>0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("location: index.php");  
        }
        else{
            echo
            "<script>alert('Wrong Password');</script>";
        }

    }
    else{
        echo
        "<script>alert('User Not Registered Please Register');</script>";

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in to Sombit Web Services </title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #333335;
            color: #a0a0a0 !important;
        }
    </style>
</head>
<body>
<form class="login-form" id="login-form" method="post">
    <h2>Login</h2>
    <input type="text" id = "username" placeholder =" Enter Your name : " name = "username">
    <input type="email" placeholder="Email Address" id ="name" name="email" required>
    <input type="password" placeholder="Password" id ="password" name="password" required>
    <button type="submit" id = "login" name="login">Log In</button>
    <a href="regester.php"> regester</a>
  </form>    
</body>
</html>