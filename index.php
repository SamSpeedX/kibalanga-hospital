<?php
session_start();

if (!isset($_SESSION['uid'])) {
    header("location: ./registration/sigin.php");
    exit;
} else {
    header("location: ./en/home.php");
    exit;
}
?>