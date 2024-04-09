<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["name"] == "dito" && $_POST["pass"] == "123") {
        header("Location: admins.php");
        exit;
    } else {
        header("Location: latget.php");
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTTT</title>
</head>

<body>
    <form action="latget.php" method="post">
        Nama :
        <input type="text" name="name"><br>
        Password
        <input type="password" name="pass"><br>
        <button type="submit">Kirims</button>
    </form>
</body>

</html>