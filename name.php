<?php
require_once 'mfumo/unga.php';

$sql = mysqli_query($conn, "SELECT * FROM `system name`");

if ($sql->num_rows === 1) {
    $onyesha_jina_kama_lipo = mysqli_fetch_assoc($sql);

    $system = $onyesha_jina_kama_lipo['campuni'];
}
mysqli_close($conn);
?>