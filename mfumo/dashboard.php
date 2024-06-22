<?php
require_once 'unga.php';

$uid = $_SESSION['uid'];
$sql = mysqli_query($conn, "SELECT * FORM `employees` WHERE id = '$uid'");

if ($sql->num_rows === 1) {
  $ona = mysqli_fetch_assoc($sql);
  $jina = $ona['jina'];
  $pepe = $ona['pepe'];
}
?>
