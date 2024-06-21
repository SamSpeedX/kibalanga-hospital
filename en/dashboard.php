<?php
include_once '../mfumo/unga.php';
$uid = $_SESSION['uid'];

$dash =  mysqli_query($conn, "SELECT * FROM `employees` WHERE id = '$uid'");

if ($dash->num_rows === 1) {
    $dashtoa = mysqli_fetch_assoc($dash);
    $user = "<div class=''>" . $dashtoa['jina']. "</div>";
    $email = "<div class=''>" . $dashtoa['pepe']. "</div>";
    $sector = "<div class=''>" . $dashtoa['kitengo'] . "</div>";
    $language = "<div class=''>" . $dashtoa['lugha'] . "</div>";
}
mysqli_close($conn);

require_once '../name.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | <?php echo $system; ?></title>
</head>
<body>
    <?php
    echo $user;
    echo $email;
    echo $sector;
    echo $language;
    ?>
</body>
</html>