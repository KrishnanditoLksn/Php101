<?php

hello();
echo("\r\n");
welcome_user('DITOT');

function hello(){
    echo 'Welcome';
}

function add(){
    return  2 * 3;
}

function welcome_user($user){
    echo 'Welcome' .$user;
}
