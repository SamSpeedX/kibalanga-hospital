<?php
include_once '../mfumo/unga.php';
// include_once '../name.php';
// echo $system;

$wafanyakazi = mysqli_query($conn, "SELECT * FROM `employees`");

if ($wafanyakazi) {
    // while ($mfanyakazi = $wafanyakazi->fetch_all(MYSQLI_ASSOC)) {
    // $mfanyakazi = mysqli_fetch_assoc($wafanyakazi);
    $mfanyakazi = $wafanyakazi->fetch_all(MYSQLI_ASSOC);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wafanyakazi | <?php //echo $system; ?></title>
    <style>
                table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <button onclick="window.location.href='ongezamfanyakazi.php'">add Employee</button>
    <div class="wafanyakazi">
        <div class="contant">
        <table>
        <tr>
            <th>Namba</th>
            <th>Name</th>
            <th>Secktor</th>
            <th>Status</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php foreach ($mfanyakazi as $row) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['jina']; ?></td>
                <td><?php echo $row['kitengo']; ?></td>
                <td><?php echo $row['hali']; ?></td>
                <td><?php echo $row['pepe']; ?></td>
                <td><a href="editmfanyakazi.php?action=edit&mid=<?php echo $row['id']; ?>">edit</a> <a href="editmfanyakazi.php?action=delete&mid=<?php echo $row['id']; ?>">Delete</a></td>
            </tr>
        <?php } ?>
    </table>
            <?php
                }
            // }
            mysqli_close($conn);
            ?>
        </div>
    </div>


</body>
</html>