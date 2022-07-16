<?php
ini_set('display_errors', 1);

define('ROOT', dirname(dirname(__FILE__)));

require ROOT . '/inc/conf.php';
require ROOT . '/inc/db.php';
//PATH: php-learn.com/users/home?id=123&type=машин&price=24&color=улаан
// $script = ROOT . '/pages' . $_SERVER['REDIRECT_URL'] . '.php';
$page = @$_SERVER['REDIRECT_URL'];
if (empty($page)) {
    require ROOT . '/pages/home.php';
} else {
    $script = ROOT . "/pages$page.php";
    //echo $script . "<br>";
    if (file_exists($script)) {
        require $script;
    } else {
        require ROOT . '/pages/404.php';
    }
}
function _post($data, $length = null)
{
    $value = $_POST[$data];
    if (!is_null($length) && mb_strlen($value) > $length) {
        $value = mb_substr($data, 0, $length);
        echo "<script>alert('$data нэртэй индексийн урт нь $length ээс хэтэрсэн тул тухайн уртаар нь хэмжиж бүртгэв.')</script>";
    }
    return $value;
}

function redirect($url)
{
    header("Location: $url"); //Хуудасрүү үсэрнэ
    exit;
}
function dd($arr, $exit = false)
{
    echo '<pre>';
    print_r($arr);
    if ($exit) {
        exit;
    }
}