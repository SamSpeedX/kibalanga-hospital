<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>Sajili Mfanyakazi</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
    <h2>Sajili Mfanyakazi</h2>
    <a href="manage_staff.php">Rudi Orodha ya Wafanyakazi</a><br><br>
    <form method="post" action="">
        <label for="name">Jina:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="position">Nafasi:</label>
        <input type="text" id="position" name="position" required><br><br>
        <label for="department">Idara:</label>
        <input type="text" id="department" name="department" required><br><br>
        <label for="email">Barua Pepe:</label>
        <input type="email" id="email" name="email"><br><br>
        <label for="phone">Simu:</label>
        <input type="text" id="phone" name="phone"><br><br>
        <input type="submit" value="Sajili">
    </form>
</body>
</html>
