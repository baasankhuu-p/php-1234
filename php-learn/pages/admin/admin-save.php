<?php
$id = get('id', 10);
$u_name = _post('u_name', 45);
$u_phone = _post('u_phone', 12);
$u_pass = _post('u_pass', 45);
$u_date = _post('u_date', 10);
$u_email = _post('u_email', 20);
$errors = [];
if (mb_strlen($u_name) < 4) {
    $errors[] = 'Нэр хэт богино байна';
}
_selectRow('select count(*) from users where phone = ? and idusers!=?', 'si', [$u_phone, $id], $numberOfPhone);
_selectRow('select count(*) from users where email = ? and idusers!=?', 'si', [$u_email, $id], $numberOfemail);
if ($numberOfPhone > 0 || $numberOfemail > 0) {
    $errors[] = "Дугаар эсвэл имейл бүртгэгдсэн байна";
}

if (sizeof($errors) > 0) {
    $_SESSION['errors'] = $errors;
    redirect('/admin/home');
} else {
    try {
        $success = _exec("
    update users set
    name=?,
    phone=?,
    pass=?,
    create_date=?,
    email=?
    where idusers=?
",
            "sssssi",
            [
                $u_name,
                $u_phone,
                $u_pass,
                $u_date,
                $u_email,
                $id,
            ]
            ,
            $count
        );
        $_SESSION['messages'] = ["$u_name нэртэй хэрэглэгчийг амжилттай өөрчиллөө"];
    } catch (Exception $e) {
        // echo 'ERROR: ' . $e->getMessage() . ' <br> ' . $e->getFile() . ' <br> ' . $e->getLine();
        $_SESSION['errors'] = ['Таны системд алдаа гарлаа. Та дараа дахин оролдоно уу'];
    } finally {
        if (isset($e)) {
            logError($e);
        }
    }
    redirect('/admin/home');
}
