<?php
//_select сайжруулж хэдэн бичлэг ирснийг заалтаар олно.
$stmt = _select($stmt, $count, "select idusers,name,pass from users where idusers>?",
    'i',
    [2],
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