<?php
require 'config.php';
// $_SESSION =[];
// if(!empty($_SESSION["id"])){
//     header("location: /index.php");
// }
session_unset();
session_destroy();
header("location: login.php");
exit();
?>
