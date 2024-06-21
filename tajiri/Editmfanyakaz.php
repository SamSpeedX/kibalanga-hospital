<?php
@require_once 'unga.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mid = $_POST['mid'];
    
    $upya = mysqli_query($conn, "UPDATE `employees` SET `jina`= '$jina', `msimbo`= '$msimbo', `pepe` = '$pepe', `lugha` = '$lugha' WHERE `employees`.`id` = '$mid'");
}
?>