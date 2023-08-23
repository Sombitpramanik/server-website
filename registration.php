<?php
require 'config.php';
// if(!empty($_SESSION["id"])){
//     header("location: /index.php");
// }
session_unset();
session_destroy();
// header("location: login.php");
// exit();
if (isset($_POST["submit"])) {
    $first_name = $_POST["f_name"];
    $last_name = $_POST["l_name"];
    $email = $_POST["email"];
    $mobile = $_POST["m_num"];
    $password = $_POST["password"];
    $c_password = $_POST["c_password"];
    $duplicate = mysqli_query($conn, "SELECT * FROM login_data Where email = '$email'");

    if (mysqli_num_rows($duplicate) > 0) {
        echo
        "<script>alert('Email and User Name is Already Taken\nUse Another One');</script>";
    } else {
        if ($password == $c_password) {
            $query = "INSERT INTO login_data VALUES('','$first_name','$last_name','$email','$mobile','$password')";
            mysqli_query($conn, $query);
            echo
            "<script>alert('Registration successful ! your username is $email');</script>";
        } else {
            echo
            "<script>alert('Password Does Not Match [ $password Not Qual to $c_password ] Please Try again');</script>";
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="language" content="en">
    <meta name="description" content="Discover reliable server and hosting solutions tailored to your needs at [Your Website Name]. We specialize in delivering cutting-edge hosting services, including shared, VPS, and dedicated hosting, ensuring your website's optimal performance. Take advantage of our expertise in custom server configurations, allowing you to build a server environment that perfectly matches your business requirements. Additionally, we offer advanced storage solutions, empowering you with scalable and secure data management. Explore our range of cost-effective plans and enhance your online presence with seamless server solutions">
    <meta name="keywords" content="web services, amazon web services, server,sql server,free website hosting, free domain and hosting, hosting, development server, sombit web services,https://hosting.sombti-server.online,">
    <meta name="author" content="Sombit Pramanik">
    <meta property="og:title" content="Sombit Web Services">
    <meta property="og:description" content="Discover reliable server and hosting solutions tailored to your needs at Sombit Web Services. We specialize in delivering cutting-edge hosting services, including shared, VPS, and dedicated hosting, ensuring your website's optimal performance. Take advantage of our expertise in custom server configurations, allowing you to build a server environment that perfectly matches your business requirements. Additionally, we offer advanced storage solutions, empowering you with scalable and secure data management. Explore our range of cost-effective plans and enhance your online presence with seamless server solutions.">
    <meta property="og:image" content="/image/sws.png">
    <meta property="og:url" content="https://hosting.sombti-server.online">
    <meta property="og:type" content="website">
    <link rel="icon" href="/image/sws.ico" type="image/x-icon">
    <title>Sombit Web Services</title>
    <!-- 
        Website External Page's and Style Link Section
     -->
    <!-- <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/responsive.css"> -->
    <link rel="stylesheet" href="/reg.css">
    <!-- <link rel="stylesheet" href="/login.css"> -->
    <!-- 
        Internal CSS Goes down
      -->

</head>

<body>
    <h1>Register Now For Exiting Offer</h1>
    <form action="" method="post" class="ref_form">
        <label for="f_name">First Name </label>
        <input type="text" name="f_name" id="f_name" required value="" placeholder="Enter Your First Name"><br>
        <label for="l_name">Surname </label>
        <input type="text" id="l_name" name="l_name" required value="" placeholder="Enter Your Last Name"><br>
        <label for="email">Email </label>
        <input type="email" id="email" name="email" required value="" placeholder="Enter Your Email"><br>
        <label for="m_num">Mobile Number </label>
        <input type="tel" id="m_num" name="m_num" required value="" placeholder="Enter your mobile Number"><br>
        <label for="password">Password </label>
        <input type="password" id="password" name="password" required value="" placeholder="Enter Super Strong Password"><br>
        <label for="c_password">Confirm</label>
        <input type="password" id="c_password" name="c_password" required value="" placeholder="Re-Enter Same Super Strong Password"><br>
        <button type="submit" name="submit" id="submit"> Register !</button>
        <button  name="login" id="login"><a style="text-decoration: none;" href="/login.php">Log IN</a></button>

    </form>
    <br>
   

</body>

</html>