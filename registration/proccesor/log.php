<?php
require_once '../../mfumo/unga.php';

function sanitizeInput($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] ==='POST') {
    $pepe = sanitizeInput($_POST['email']);
    $msimbo = sanitizeInput($_POST['password']);
    $msimboh = password_hash($msimbo, PASSWORD_DEFAULT);

    $kagua = mysqli_query($conn, "SELECT * FROM `employees` WHERE pepe = '$pepe' AND msimbo='$msimboh'");

    if ($kagua->num_rows === 1) {
        $toa = mysqli_fetch_assoc($kagua);
        $msimbod = $toa['msimbo'];
        $kitengo = $toa['kitengo'];
        $lugha = $toa['lugha'];

        if (password_verify($msimbo, $msimbod)) {
            $_SESSION['uid'] = $toa['id'];
            
            if ($lugha == 'en') {
                header("location: ../../dashboard.php");
                exit;
            } else {
                header("location: ../../sw/dashboard.php");
                exit;
            }
            
        } else {
            header("location: ../signin.php?alert=Wrong password");
            exit;
        }
      
    } else {
        header("location: ../signin.php?alert=Wrong infomation");
        exit;
    }
    
}
?>