<?php
$id = get('id', 10);
$phone = get('phone', 12);

try {
    _exec("delete from transaction where create_user_id = ?",
        'i',
        [$id],
        $count);
    _exec("delete from users where idusers = ?",
        'i',
        [$id],
        $count);
    $_SESSION['messages'] = ["$id id-тай $phone -дугаартай хэрэглэгчийг амжилттай устгалаа"];
} catch (Exception $e) {
    // echo 'ERROR: ' . $e->getMessage() . ' <br> ' . $e->getFile() . ' <br> ' . $e->getLine();
    $_SESSION['errors'] = ['Устгахад алдаа гарлаа'];
} finally {
    if (isset($e)) {
        logError($e);
    }
}
redirect('/admin/home');