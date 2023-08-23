<?php
require 'config.php';
// if(!empty($_SESSION["id"])){
//     header("location: /index.php");
// }
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM login_data WHERE email = '$email'");
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
        if ($password == $row["password"]) {
            $_SESSION["login"] = true; // Set login session variable
            $_SESSION["id"] = $row["id"];
            header("location: index.php");
            exit(); // Important: terminate the script after redirection
        } else {
            echo "<script>alert('Wrong Password');</script>";
        }
    } else {
        echo "<script>alert('Username or email is not found :(  Register Now!');</script>";
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
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/responsive.css">
    <link rel="stylesheet" href="/login.css">
    <!-- 
        Internal CSS Goes down
      -->

    <style>
    </style>
</head>

<body>
    <h1> Log IN to access <br> Sombit Web Services</h1><br>
    <form action="" method="post" class="login_form">
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required><br>
        <label for="password">Password : </label>
        <input type="password" name="password" id="password" required> <br>
        <button type="submit" name="submit" id="login_btn">Log In</button>
        <button id ="reg_btn"> <a href="/registration.php">Register now </a></button>
    </form>



</body>

</html>