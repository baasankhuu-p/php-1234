amjilttai burtgegdlee
<?php
session_start();
$username = _post('username', 50);
$phone = _post('phone', 15);
$email = _post('email', 150);
$userpassword = _post('userpassword', 50);
$confirmpassword = _post('confirmpassword', 50);
$terms = _post('terms');
/*extract($_POST);//Postoor orj irsen key-iin huvisagchid hadgalna  */
//Aldaag massiv-d hadgalna
//Хэрэглэгчийн нэр шаардлага хангаж буй эсэх
$errors = [];
if (mb_strlen($username) < 4) {
    $errors[] = 'Нэр хэт богино байна';
}
//ийм утастай хэрэглэгч бүртгэлтэй эсэх
_selectRow($stmt, $count, 'select count(*) from users where phone = ?', 's', [$phone], $numberOfPhone);
if ($numberOfPhone > 0) {
    $errors[] = "$phone Дугаар бүртгэгдсэн байна";
}
//ийм имейлтэй хэрэглэгч бүртгэлтэй эсэх
_selectRow($stmt, $count, 'select count(*) from users where email = ?', 's', [$email], $numberOfemail);
if ($numberOfemail > 0) {
    $errors[] = "$email Email бүртгэгдсэн байна";
}
//Нууц үг хоорондоо таарч буй эсэх
if ($userpassword != $confirmpassword) {
    $errors[] = 'Нууц үг хоорондоо таарахгүй байна';
}
//Үйлчилгээний нөхцөлийг шалгах
if (empty($terms)) {
    $errors[] = 'Та үйлчилгээний нөхцөлийг заавал уншиж бөглөх шаардлагатай';
}
if (sizeof($errors) > 0) {
    $_SESSION['errors'] = $errors;
    redirect("/sign-up");
} else {
    _exec(
        "insert into users set name=?, pass=?, phone=?, email=?",
        'ssss',
        [$username, $userpassword, $phone, $email],
        $count);
    $_SESSION['username'] = $username;
    $_SESSION['phone'] = $phone;
    $_SESSION['email'] = $email;
    redirect("/user/home");
}