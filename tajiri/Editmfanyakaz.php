<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Staff</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
    <h2>Edit Staff</h2>
    <a href="manage_staff.php">Baki kwenye orodha ya Wafanyakazi</a><br><br>
    <form method="post" action="">
        <input type="hidden" name="id" value="">
        <label for="name">Jina:</label>
        <input type="text" id="name" name="name" value="" required><br><br>
        <label for="position">Nafasi:</label>
        <input type="text" id="position" name="position" value="" required><br><br>
        <label for="department">Idara:</label>
        <input type="text" id="department" name="department" value="" required><br><br>
        <label for="email">Barua Pepe:</label>
        <input type="email" id="email" name="email" value=""><br><br>
        <label for="phone">Simu:</label>
        <input type="text" id="phone" name="phone" value=""><br><br>
        <input type="submit" value="Edit Mfanyakazi">
    </form>
</body>
</html>
