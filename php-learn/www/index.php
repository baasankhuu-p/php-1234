<?php
define('ROOT', dirname(dirname(__FILE__)));
//PATH: php-learn.com/users/home?id=123&type=машин&price=24&color=улаан

//front controller бусад скриптийг URL хамааруулж дуудна
//URL
$script = $_SERVER['REDIRECT_URL'] . '.php';
echo '<br>SCRIPT: ' . ROOT . '/pages' . $script;
require ROOT . '/pages' . $script;
function dd($arr)
{
    echo '<pre>';
    print_r($arr);
    exit;
}