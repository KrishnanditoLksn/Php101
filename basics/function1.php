<?php
$num = 2;
hello();
echo ("\r\n");
welcome_user('DITOT');

function hello()
{
    global $num;
    echo $num;
}

function add()
{
    return  2 * 3;
}

function welcome_user($user)
{
    echo 'Welcome' . $user;
}
