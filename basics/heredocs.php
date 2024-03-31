<?php

$he = 'dito';
$she = 'girld';

$text = "$he said PHP is \"PHP is awesome\".
        \"Of course\" $she agreeed ";

echo($text);

$str = <<<IDENTIFIER
place a string here
it can span multiple lines
and include single quote ' and double quotes "
IDENTIFIER;

echo($str);