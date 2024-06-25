<?php
session_start();

$uid = $_SESSION['uid'];

require_once 'unga.php';

if (isset($_GET['hali'])) {
    $hali = $_GET['hali'];
     
    if ($hali == "muelekeo") {
        $angalia = mysqli_query($conn, "SELECT * FROM `employees` WHERE id = '$uid'");

        if ($angalia->num_rows === 1) {
            $lugha_yake = mysqli_fetch_assoc($angalia);

            if (isset($uid)) {
                if ($lugha_yake == "en") {
                    header("location: ../en/dashboard.php");
                    exit;
                }
    
                if ($lugha_yake == "default") {
                    header("location: ../en/dashboard.php");
                    exit;
                }
    
                if ($lugha_yake == "sw") {
                    header("location: ../sw/dashboard.php");
                    exit;
                }
            } else {
                header("location: ../registration/signin.php");
                exit;
            }
        }
    }

    if ($hali == "kagua") {
        if (!isset($uid)) {
            header("location: ../registration/signin.php");
            exit;
        // } else {
        //     $cuid = $_COOKIE['uid'];
        //     $angalia_kama_amesajiliwa = mysqli_query($conn, "SELECT * FROM `employees` WHERE id = '$cuid'");
            
        //     if ($angalia_kama_amesajiliwa->num_rows === 1) {
        //         header("location: ../alert.php?alert=Your not one of our Employees from now your banned from using this site");
        //         exit;
        //     }
        }
    }
}
?>