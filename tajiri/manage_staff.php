<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage Staff</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
    <h2>Manage Staff</h2>
    <a href="dashboard.php">Rudi Nyumbani</a><br><br>
    <table border="1">
        <tr>
            <th>Jina</th>
            <th>Nafasi</th>
            <th>Idara</th>
            <th>Barua Pepe</th>
            <th>Simu</th>
            <th>Vitendo</th>
        </tr>
<!-- hapa utabadili😁-->
        <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['position']; ?></td>
            <td><?php echo $row['department']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td>
                <a href="editmfanyakazi.php?id=<?php echo $row['id']; ?>">Edit</a> |
                <a href="manage_staff.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('Una uhakika unataka kufuta?')">Futa</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
