<?php
$conn = mysqli_connect('localhost', 'root', '', 'honelo');

if (!$conn) {
    die("connection fail\n muunganisho umeshindikana" . "<br>" . mysqli_connect_error());
}
?>