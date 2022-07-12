<?php
//phpinfo();
$conn = mysqli_connect('127.0.0.1', 'root', '', 'php_learn');
if (mysqli_connect_errno()) {
    echo 'Холбогдож чадаагүй' . mysqli_connect_error();
    exit;
} else {
    echo "Амжилттай";
}

$resultset = mysqli_query($conn, "select * from users");

echo mysqli_($resultset);