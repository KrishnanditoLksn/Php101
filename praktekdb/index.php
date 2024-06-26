<?php
$conn = include("config.php");
$select_sql = "SELECT * FROM mahasiswa";
$join_sql = "SELECT mahasiswa.nama , mahasiswa.nim , NILAI_MAHASISWA.statistika
                FROM mahasiswa
                    INNER JOIN `NILAI_MAHASISWA`
                        ON NILAI_MAHASISWA.nilai_id = mahasiswa.id;";
$select_query = mysqli_query($conn, $select_sql);

$join_query = mysqli_query($conn, $join_sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman List Konek </title>
</head>

<body>
    <h1>List Mahasiswa Universitas Sanata Dharma</h1>
    <?php while ($list_mhs = mysqli_fetch_array($select_query)) : ?>
        <ul>
            <li>
                <?= $list_mhs['nama'] ?>
            </li>
            <li>
                <?= $list_mhs["id"] ?>
                <a href="delete_mahasiswa.php?id=<?=$list_mhs["id"]?>">Hapus</a>
            </li>
        </ul>
    <?php endwhile; ?>

    <h2>Daftar mahasiswa di Universitas Sanata Dharma</h2>
    <?php while ($list_mhs = mysqli_fetch_array($join_query)) : ?>
        <ul>
            <li>
                <?= $list_mhs['nama'] ?>
            </li>
            <li>
                <?= $list_mhs["statistika"] ?>
            </li>
        </ul>
    <?php endwhile; ?>
    <a href="add_mahasiswa.php">Tambah Data Mahasiswa</a>
</body>

</html>