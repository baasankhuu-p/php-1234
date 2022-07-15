<?php
require 'inc/header.php';
$con = mysqli_connect('127.0.0.1', 'root', '', 'php_learn');
// 2. $data бэлтгэх
$data = [[30, 'bat', 9594, 12], [31, 'bdmaa', 959449, 'b2a0d1a8']];
// 3. mysqli_prepare
// $stmt1 = mysqli_prepare($con, "insert into users values(?,?,?,?)");
$stmt1 = mysqli_prepare($con, "update users set pass = ? where idusers = ?");
// 4. mysqli_stmt_bind_param
// mysqli_stmt_bind_param($stmt1, 'isis', $id, $name, $phone, $pass);
$updatepass = "123A";
$if_Id = 31;
mysqli_stmt_bind_param($stmt1, 'si', $updatepass, $if_Id);
// 5. mysqli_stmt_execute
// foreach ($data as $user) {
//     $id = $user[0];
//     $name = $user[1];
//     $phone = $user[2];
//     $pass = $user[3];
//     echo "<br>$id  $name  $phone $pass";
//     mysqli_stmt_execute($stmt1);
// }
mysqli_stmt_execute($stmt1);
// 6. mysqli_stmt_close
mysqli_stmt_close($stmt1);
require 'inc/footer.php';