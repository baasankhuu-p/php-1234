<?php
//phpinfo();
$conn = mysqli_connect('127.0.0.1', 'root', '', 'php_learn');
if (mysqli_connect_errno()) {
    echo 'Холбогдож чадаагүй' . mysqli_connect_error();
    exit;
} else {
    echo "Амжилттай";
}

$rstset = mysqli_query($conn, "select * from users");

//mysqli_query($conn, "insert into users values(null,'dorj','95959595','123456789','2020-05-01')");
// mysqli_query($conn, "delete from users where idusers=4");
if (!mysqli_query($conn, "update users set name = 'bayarmaa', phone=95959494,create_date='2022/12/15' where idusers = 2")) {
    die('Aldaa garlaa: ' . mysqli_error($conn));
}
if (!mysqli_errno($conn)) {
    die('Алдаа  гарлаа' . mysqli_error($conn));
}