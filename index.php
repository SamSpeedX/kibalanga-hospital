<?php
session_start();

if (!isset($_SESSION['uid'])) {
    header("location: ./mfumo/checkpoint.php?hali=kagua");
    exit;
} else {
    header("location: ./mfumo/checkpoint.php?hali=muelekeo");
    exit;
}
?>