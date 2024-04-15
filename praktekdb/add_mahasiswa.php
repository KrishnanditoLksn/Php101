<?php
$conn = include("config.php");
if (isset($_POST["submit"])) {
    # code...
    $mhs_name = htmlspecialchars($_POST["name"]);
    $mhs_nim = htmlspecialchars($_POST["nim"]);
    $mhs_email = htmlspecialchars($_POST["email"]);
    $mhs_jurusan = htmlspecialchars($_POST["jurusan"]);
    $create_mhs_sql = "INSERT INTO mahasiswa (nama , nim,email,jurusan) VALUES('$mhs_name','$mhs_nim','$mhs_email','$mhs_jurusan');";

    if (mysqli_query($conn, $create_mhs_sql)) {
        header("Location: index.php");
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Mahasiswa</title>
</head>

<body>
    <form action="add_mahasiswa.php" method="post">
        <label for="name">Nama Lengkap:</label><br>
        <input type="text" id="name" name="name"><br>

        <label for="name">NIM:</label><br>
        <input type="number" id="nim" name="nim"><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="jurusan">Jurusan:</label><br>
        <input type="text" id="jurusan" name="jurusan"><br>
        <input type="submit" name="submit">
    </form>
</body>

</html>