<?php
session_start();
ini_set('display_errors', 1);

define('ROOT', dirname(dirname(__FILE__)));
require ROOT . '/inc/conf.php';
require ROOT . '/inc/db.php';
//PATH: php-learn.com/users/home?id=123&type=машин&price=24&color=улаан
// $script = ROOT . '/pages' . $_SERVER['REDIRECT_URL'] . '.php';

$page = @$_SERVER['REDIRECT_URL'];
if (empty($page)) {
    require ROOT . '/pages/sign-in.php';
} else {
    $script = ROOT . "/pages$page.php";
    //echo $script . "<br>";
    if (file_exists($script)) {
        require $script;
    } else {
        require ROOT . '/pages/404.php';
    }
}
function get($data, $length = null)
{
    if (isset($_GET[$data])) {
        $value = $_GET[$data];
        if (!is_null($length) && mb_strlen($value) > $length) {
            $value = mb_substr($data, 0, $length);
            echo "<script>alert('$data нэртэй индексийн урт нь $length ээс хэтэрсэн тул тухайн уртаар нь хэмжиж бүртгэв.')</script>";
        }
        return $value;
    } else {
        return '';
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
function getIpAddress()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    return $_SERVER['REMOTE_ADDR'];
}

//admin руугаа мэдээлэл өгөх
function alertAdmin($message)
{
    //email -> sendgrid
    // sms -> skytel web2sms url?phone=99455432$msg=aldaa:$message e.g
}
function formatMoney($money)
{
    if ($money == '0') {
        return '';
    } else {
        $money = number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "", $money)), 0);
        return $money;
    }
}
function logError($e)
{
    _exec("insert into error set
    ognoo = now(),
    ip = ?,
    error = ?,
    error_code = ?,
    file = ?,
    line =?,
    site='user'
    ", 'ssisi',
        [getIpAddress(), $e->getMessage(), $e->getCode(), $e->getFile(), $e->getLine()],
        $count
    );
}