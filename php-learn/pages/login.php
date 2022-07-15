<?php
//_select сайжруулж хэдэн бичлэг ирснийг заалтаар олно.
// $success = _exec(
//     "update users set name = ?,pass = ? where idusers=?",
//     'ssi',
//     ['Баяраа', '1234', 3], $count
// );

// $success = _exec(
//     "delete from users where idusers=?",
//     'i',
//     [30], $count
// );
// $success = _exec(
//     "insert into users set name = ?,pass = ?",
//     'ss',
//     ['Бат', '1234'], $count
// );

// $stmt = _select($stmt, $count, "select idusers,name,pass from users where idusers>?",
//     'i',
//     [0],
//     $col1, $col2, $col3);
// echo "<br>Нийт: $count<br>";
// while (_fetch($stmt)) {
//     echo "<br>$col1 ==> $col2 ==> $col3";
// }

_selectAll($stmt, $count, "select idusers,name,pass from users",
    $col1, $col2, $col3);
echo "<br>Нийт: $count<br>";
while (_fetch($stmt)) {
    echo "<br>$col1 ==> $col2 ==> $col3";
}
//_close,_close_stmt функц нэмэх
//Stmt close hiisnii daraa connection - oo close hiine
//_close_stmt($stmt);
//_close_con();

//Hoyulang ni close hiine
_close_con($stmt);