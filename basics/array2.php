<?php
$name = [1, 1, 1];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array PHP </title>
    <style>
        div {
            width: 50px;
            font-weight: 50px;
            background-color: salmon;
            text-align: center;
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <?php for ($i = 0; $i < count($name); $i++) { ?>
        <div>
            <?php
            echo $name[$i];
            ?>
        </div>
    <?php } ?>

    <?php foreach ($name as $key) { ?>

        <div>
            <?php
            echo $name[$key]
            ?>
        </div>

    <?php } ?>
</body>

</html>