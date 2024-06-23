<?php
session_start();
require_once '../name.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $system; ?> Hospital</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
    <!-- vizuri nimeona kazi yako kijana-->
    <h1>Karibu <?php echo $system; ?> Hospitali</h1>
    <a href="signin.php">Login as Admin</a>
    <div onclick="window.location.href='../regitration/signin.php'"></div>
</body>
</html>
