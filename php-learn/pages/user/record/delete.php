<?php
$id = get('id', 10);
$utga = get('utga', 200);
$ognoo = get('ognoo', 10);
// dd($_GET, true);
try {
    _exec("delete from transaction where id = ? and create_user_id = ?",
        'ii',
        [$id, $_SESSION['idusers']],
        $count);
    $_SESSION['messages'] = ["$ognoo өдрийн \" $utga\"-утгатай гүйлгээг амжилттай устгалаа"];
} catch (Exception $e) {
    // echo 'ERROR: ' . $e->getMessage() . ' <br> ' . $e->getFile() . ' <br> ' . $e->getLine();
    $_SESSION['errors'] = ['Устгахад алдаа гарлаа'];
} finally {
    if (isset($e)) {
        logError($e);
    }
}
redirect('/user/home');
