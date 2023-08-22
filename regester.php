<?php
require 'config.php'; // Don't forget the semicolon at the end of this line

if (isset($_POST["signup"])) {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    
    $duplicate = mysqli_query($conn, "SELECT * FROM user_datehosting_site_userdata WHERE username = '$username' OR email = '$email'");
    
    if (mysqli_num_rows($duplicate) > 0) {
        echo "<script>alert('Username or Email has Already Taken');</script>"; // Corrected quotes
    } else {
        if ($password == $confirmpassword) {
            $query = "INSERT INTO user_date VALUES ('', '$name', '$username', '$email', '$password')";
            mysqli_query($conn, $query);
            echo "<script>alert('Registration Successfully');</script>"; // Corrected quotes
        } else {
            echo "<script>alert('Password Does not Match Try Again');</script>"; // Corrected quotes
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles.css">
<title>Sing Up to Sombit Web Services</title>
<!-- <link rel="stylesheet" href="style.css"> -->
<style>
    body {
  margin: 0;
  padding: 0;
  background-color: #333335;
  color: #a0a0a0 !important;
}

.signup-form input {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.signup-form button {
  background-color: #333;
  color: white;
  border: none;
  padding: 10px 20px;
  cursor: pointer;
  border-radius: 5px;
}

</style>
</head>
<body>
<form class="signup-form" id="signup-form" method="post">
      <h2>Create Account</h2>
      <input type="text" id = "name" placeholder="Name" name="name" required>
      <input type="txt" id = "username" placeholder="username" name="username" required>
      <input type="email" id = "email" placeholder="Email Address" name="email" required>
      <input type="password" id = "password" placeholder="Password" name="password" required>
      <input type="password" id = "confirmpassword" placeholder="confirm password" name="confirmpassword" required>
      <button type="submit" id = "signup" name="signup">Create Account</button>
      <a href="index.php"> log in </a>
</form>
<br>

  <script src="script.js"></script>
</body>
</html>
