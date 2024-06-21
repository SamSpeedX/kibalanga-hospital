<?php
require_once '../name.php';

if (isset($_GET['alert'])) {
    $alert = "<div class='alert' id='alert'>" . $_GET['alert'] . "</div>";
}

// function sanitizeInput($data){
//     $data = trim($data);
//     $data = stripcslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }

// if ($_SERVER['REQUEST_METHOD'] ==='POST') {
//     $pepe = sanitizeInput($_POST['email']);
//     $msimbo = sanitizeInput($_POST['password']);
//     $msimboh = password_hash($msimbo, PASSWORD_DEFAULT);

//     echo $pepe;
//     echo "<br>";
//     echo $msimboh;
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing in | <?php echo $system; ?></title>
    <link rel="stylesheet" href="../assets/css/signin.css">
</head>
<body id="body">
    <div class="alert-body">
    <?php 
    if (isset($_GET['alert'])) {
        $alert = "<div class='alert' id='alert'>" . $_GET['alert'] . "<span class='funga'>&times;</span></div>";
        echo $alert;
    }
    ?>
    </div>
    <div class="signin-form">
        <div class="container">
            <form action="./proccesor/log.php" method="post">
            <!-- <form action="" method="post"> -->
                <label for="username">username</label>
                <div class="input-box">
                    <input type="text" name="email" id="email" placeholder="your user name">
                    <span class="fa fa-user">gh</span>
                </div>

                <label for="password">password</label>
                <div class="input-box">
                    <input type="password" name="password" id="password" placeholder="your password">
                    <span class="pass-action">
                        <span class="fa fa-eye-open" id="show">show</span>
                        <span class="fa fa-eye-close" id="hide">hide</span>
                    </span>
                    <span class="fa fa-unlock"></span>
                </div>

                <button type="submit" class="sign-in-btn">Sign in</button>
            </form>
        </div>
    </div>
    <script src="../assets/js/signin.js"></script>
</body>
</html>