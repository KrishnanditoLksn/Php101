<?php
$book['title'] = 'php_assoc';
$html['description'] = 'Learn how to use associative arrays in PHP';

$kawan = array("name" => "Dito", "nim" => 225314024);

// echo (var_dump($html));

// echo ($html['description']);

//foreach list assoc
foreach ($kawan as $key => $value) {
    echo ("List  {$key} : {$value} ");
}
