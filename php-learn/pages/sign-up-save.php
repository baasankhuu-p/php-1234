amjilttai burtgegdlee
<?php
dd($_POST);
$username = _post('username', 50);
$phone = _post('phone', 15);
$email = _post('email', 150);
$userpassword = _post('userpassword', 50);
$confirmpassword = _post('confirmpassword', 50);
/*extract($_POST);//Postoor orj irsen key-iin huvisagchid hadgalna  */
//Aldaag massiv-d hadgalna
//Хэрэглэгчийн нэр шаардлага хангаж буй эсэх
$errors = [];
if (mb_strlen($username) < 4) {
    $errors[] = 'Нэр хэт богино байна';
}
//ийм утастай хэрэглэгч бүртгэлтэй эсэх
_select($stmt, $count, 'select count(*) from users where phone = ?', 's', [$phone], $numberOfPhone);
_fetch($stmt);
if ($numberOfPhone > 0) {
    $errors[] = 'Дугаар бүртгэгдсэн байна';
}
//ийм имейлтэй хэрэглэгч бүртгэлтэй эсэх
_select($stmt, $count, 'select count(*) from users where email = ?', 's', [$email], $numberOfemail);
_fetch($stmt);
if ($numberOfemail > 0) {
    $errors[] = 'Email бүртгэгдсэн байна';
}
//Нууц үг хоорондоо таарч буй эсэх
if ($userpassword != $confirmpassword) {
    $errors[] = 'Нууц үг хоорондоо таарахгүй байна';
}
if (sizeof($errors) > 0) {
    dd($errors);
} else {
    _exec(
        "insert into users set name=?, pass=?, phone=?, email=?",
        'ssss',
        [$username, $userpassword, $phone, $email],
        $count);
    redirect("/home");
}