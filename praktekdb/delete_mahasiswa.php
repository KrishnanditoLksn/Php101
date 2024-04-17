<?php
$conn = include("config.php");
$id = $_GET["id"];
$mhs_delete = "DELETE FROM mahasiswa WHERE id = $id ";
$delete_query = mysqli_query($conn, $mhs_delete);

if (isset($delete_query)) {
    header("Location: index.php");
}
