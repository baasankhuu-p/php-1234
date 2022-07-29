<?php
session_start();
// phone, userpassword хүлээж авна
$phone = _post('phone', 15);
$userpassword = _post('userpassword', 50);
//Алдааг хадгалах массив үүсгэнэ
$errors = [];
//Хэрэв phone password алдаатай бол алдааг session-д бичээд login хуудасруу үсэргэнэ
// if (mb_strlen($phone) < 8) {
//     $errors[] = 'Утасны дугаар буруу байна';
// }
// if (mb_strlen($userpassword) < 4) {
//     $errors[] = 'Нууц үгээ зөв оруулна уу';
// }
// if (sizeof($errors) > 0) {
//     $_SESSION['errors'] = $errors;
//     redirect('/sign-in');
// }
_selectRow($stmt, $count, "select name, pass, phone, type from users where phone=? and pass=?", 'ss', [$phone, $userpassword], $username, $password, $phone, $type);

/**
 * 1) session эхлүүлнэ
 * 2) session-д хэрэглэгчийн мэдээллийг бичнэ
 * 3) home хуудас руу буцаж үсэргэнэ
 */

if (!empty($username)) {
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['phone'] = $phone;
    //ene orond bazad hadgalsan type orj irj bolno jsheelbel admin,user geh met
    $_SESSION['type'] = $type;
    redirect("/user/home");
}
//Хэрэв мэдээлэл байхгүй бол
//Алдааны мэдээллийг session-д бичнэ
else {
    $_SESSION['errors'] = ['Таны нууц үг эсвэл дугаар буруу байна'];
    //Логин хуудас руу буцааж үсэргэнэ
    redirect('/sign-in');
}