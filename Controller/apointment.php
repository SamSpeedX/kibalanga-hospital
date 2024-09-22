<?php
function hakiki($data) {
    $data = trim($data);
    $data = stripcslashes($data);
    $data= htmlspecialchars($data);

    return $data;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jina = hakiki($_POST['name']);
    $pepe = hakiki($_POST['email']);
    $namba = hakiki($_POST['number']);
    $huduma = hakiki($_POST['service']);
    $ujumbe = hakiki($_POST['message']);
}
?>