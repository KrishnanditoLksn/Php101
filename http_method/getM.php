<?php

$_GET["hobi"] = "Ngoding";
var_dump($_GET);



if ($_GET["name"] || $_GET["age"]) {
    echo "Welcome" . $_GET["name"] . "<br />";
    echo "You are ". $_GET['age']. " years old.";
    
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

